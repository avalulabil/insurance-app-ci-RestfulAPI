<?php
namespace App\Controllers;
use App\Models\PolicyModel;

class PolicyController extends BaseController {
    public function __construct() {
        if (!session()->get('logged_in')) {
            return redirect()->to('/login')->send();
        }
    }

    public function index() {
        return view('policy_form');
    }

    public function create() {
        $policyModel = new PolicyModel();
        $data = [
            'customer_name' => $this->request->getPost('customer_name'),
            'coverage_period_start' => $this->request->getPost('coverage_period_start'),
            'coverage_period_end' => $this->request->getPost('coverage_period_end'),
            'vehicle' => $this->request->getPost('vehicle'),
            'coverage_price' => $this->request->getPost('coverage_price'),
            'coverage_type' => $this->request->getPost('coverage_type'),
            'risk_flood' => $this->request->getPost('risk_flood') ? 1 : 0,
            'risk_earthquake' => $this->request->getPost('risk_earthquake') ? 1 : 0,
        ];

        $years = (strtotime($data['coverage_period_end']) - strtotime($data['coverage_period_start'])) / (365*60*60*24);
        $rate_coverage = $data['coverage_type'] == 1 ? 0.0015 : 0.005;
        $rate_flood = $data['risk_flood'] ? 0.0005 : 0;
        $rate_earthquake = $data['risk_earthquake'] ? 0.0002 : 0;

        $premium_coverage = $years * $data['coverage_price'] * $rate_coverage;
        $premium_risk = $years * $data['coverage_price'] * ($rate_flood + $rate_earthquake);
        $data['total_premium'] = $premium_coverage + $premium_risk;
        try {
            if ($policyModel->save($data)) {
                return redirect()->to('/policy/history');
            } else {
                return redirect()->back()->with('error', 'Failed to add policy');
            }
        } catch (\Exception $e) {
            // Debugging: Tangkap dan tampilkan error
            echo "Exception: " . $e->getMessage();
            return redirect()->back()->with('error', 'An error occurred');
        }
    }


    public function history() {
        $policyModel = new PolicyModel();
        $data['policies'] = $policyModel->findAll();
        return view('policy_history', $data);
    }

    public function print($id) {
        $policyModel = new PolicyModel();
        $data['policy'] = $policyModel->find($id);
        return view('policy_print', $data);
    }
}