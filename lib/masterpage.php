<?php
class MasterPage {

	static function GetKey($key){
		return "_begin_" . $key . "_end_";
	}
	
	static function IsKeyDefined($key) {
		return defined(MasterPage::GetKey($key));
	}
	
	static function Render($page) {
		include($page);
	}

	static function BeginPlaceHolder() {
		ob_start();
	}

	static function EndPlaceHolder($key) {
		$content = ob_get_contents();
		define(MasterPage::getKey($key), $content, true);
		ob_end_clean();
	}

	static function GetPlaceHolder($key, $clean = true) {
		$temp = constant(MasterPage::GetKey($key));

		if ($clean) {
			define(MasterPage::GetKey($key), null);
		}

		return $temp;
	}
}
?>