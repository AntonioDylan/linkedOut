<?php
  
    include $_SERVER['DOCUMENT_ROOT'].'/linkedOut/Model/PersonneManager.php';



/**
 * function permit get all informations from user and print it in admin table
 *
 * 
 * @return String with the complete user table
 */
function getUsersInfos()
{
    $personneManager = new PersonneManager();
    $infosUsersDb = $personneManager->getAllPersonne();
    $tableHeader = '<table class="table">
	                    <thead>
                            <tr>
                                <th scope="col">nom</th>
                                <th scope="col">prenom</th> 
                                <th scope="col">login</th>
                                <th scope="col">mdp</th>
                                <th scope="col">telephone</th>
                            </tr>
                        </thead>
                        <tbody>';
    $tableBody= "";
    foreach ($infosUsersDb as $value) {
    $userInfo = '<tr>
                
				<td>' . $value->getNom() . '</td>
				<td>' . $value->getPrenom() . '</td>
				<td>' . $value->getMail() . '</td>
				<td>' . $value->getMdp() . '</td>
				<td>' . $value->getTelephone() . '</td>
            </tr>';
    $tableBody .= $userInfo;
    }

    $tableEnd = '       </tbody>
                    </table>';
    
    $table = $tableHeader . $tableBody . $tableEnd;
    
return $table;
}
