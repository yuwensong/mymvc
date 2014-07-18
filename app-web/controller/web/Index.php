<?php
rsf_require_controller('Controller');
class Web_IndexController extends Controller {
	public function run() {
		$request = RSF::get_instance()->request;
		$params = $request->get_params();
		$matchs = $request->get_matchs();
print_r($params);
		echo 222;exit();

		return 'Web_Index';
	}
}
