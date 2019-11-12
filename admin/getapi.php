

<?php


session_start();
	
	include_once './contoller/select.php';

	$adminObjectForSelect = new select;


	$page = $_REQUEST['page'];

	switch ($page) {
		case 'snacksanddinks':
			$productCategory = "snacksanddricks";

			$adminObjectForSelect = new select;

			$adminFunctionSandDUpdate = $adminObjectForSelect->SelectProductOnCategorySnacksanddricks($productCategory);
			if ($adminFunctionSandDUpdate) {
				echo json_encode($adminFunctionSandDUpdate);
			}
			break;
		case 'countregisterusers':
				
				$adminObjectForSelect = new select;

				$countRegUsers = $adminObjectForSelect->countRegisterdUsers();
				if ($countRegUsers) {
					echo json_encode($countRegUsers);
				}

			break;
		case 'countusersmessage':

				$adminObjectForSelect = new select;

				$countUsersMessage = $adminObjectForSelect->countUsersMessage();
				if ($countUsersMessage) {
					echo json_encode($countUsersMessage);
				}

		break;



										    	
										
		// case 'usersmessage':

		// 		$adminObjectForSelect = new select;

		// 		$UsersMessage = $adminObjectForSelect->usersMessage();
		// 		if ($UsersMessage) {
		// 				echo json_encode($UsersMessage);
		// 		}

		// break;

		default:
			# code...
			break;
	}






















?>