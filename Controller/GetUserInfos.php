<?php
  
    include $_SERVER['DOCUMENT_ROOT'].'/linkedOut/Model/PersonneManager.php';



/**
 * function permit get all informations from user and print it in admin table
 *
 * @param [array] $infosUsersDb
 * @return void
 */
function getUsersInfos()
{
    $personneManager = new PersonneManager();
    $infosUsersDb = $personneManager->getAllPersonne();
    var_dump($infosUsersDb);
    $tableHeader = '<table>
	                    <thead>
                            <tr>
                                <th>nom</th>
                                <th>prenom</th> 
                                <th>login</th>
                                <th>mdp</th>
                                <th>date naissance</th>
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
