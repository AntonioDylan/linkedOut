<?php
  
    include $_SERVER['DOCUMENT_ROOT'].'/Model/PersonneManager.php';
    


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
                                <th scope="col">Nom</th>
                                <th scope="col">Prénom</th> 
                                <th scope="col">Login</th>
                                <th scope="col">Password</th>
                                <th scope="col">Téléphone</th>
                            </tr>
                        </thead>
                        <tbody>';
    $tableBody= "";
    foreach ($infosUsersDb as $value) {
    $userId = $value->getIdPersonne();
    $userInfo = '<tr>
                
				<td>' . $value->getNom() . '</td>
				<td>' . $value->getPrenom() . '</td>
				<td>' . $value->getMail() . '</td>
				<td>' . $value->getMdp() . '</td>
                <td>' . $value->getTelephone() . '</td>
                <td><i class="far fa-edit" id="'.$userId.'" onclick="" ></i>
                    <i class="far fa-trash-alt" id="'. $userId .'" onclick="" ></i>
                </td>
            </tr>';
    $tableBody .= $userInfo;
    }

    $tableEnd = '       </tbody>
                    </table>';
    
    $table = $tableHeader . $tableBody . $tableEnd;
    
return $table;
}
