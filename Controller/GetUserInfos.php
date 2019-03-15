<?php






/**
 * function permit get all informations from user and print it in admin table
 *
 * @param [array] $infosUsersDb
 * @return void
 */
function getUsersInfos()
{
    $infosUsersDb = PersonneManager->getAllPersonne();

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

    foreach ($infosUsersDb as $value) {
    $userInfo = '<tr>
				<td>' . $value['nom'] . '</td>
				<td>' . $value['prenom'] . '</td>
				<td>' . $value['email'] . '</td>
				<td>' . $value['password'] . '</td>
				<td>' . $value['datenaiss'] . '</td>
            </tr>';
    $tableBody .= $userInfo;
    }

    $tableEnd = '       </tbody>
                    </table>';
    
    $table = $tableHeader . $tableBody . $tableEnd;
    
return $table;
}
