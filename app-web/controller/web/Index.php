<?php
rsf_require_controller('Controller');
class Web_IndexController extends Controller {
	public function run() {
		$request = RSF::get_instance()->request;
		$params = $request->get_params();
		$matchs = $request->get_matchs();
		$aaa = 234444333;
		$request->set_attribute('aaa',$aaa);
		return 'Web_Index';
	}
}
