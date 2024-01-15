<!-- ## Snack 1

Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario.
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
Stampiamo a schermo tutte le partite con questo schema:

Olimpia Milano - Cantù | 55-60 -->


<?php 
$basketballTeams = [
    [ 'homeTeam' => 'Cantù',
      'otherTeam' => 'Como',
      'homeTeamPoints' =>20,
      'otherTeamPoints' => 10,
    ],
    [ 'homeTeam' => 'Milano',
      'otherTeam' => 'Genova',
      'homeTeamPoints' => 80,
      'otherTeamPoints' => 43,
    ],
    [ 'homeTeam' => 'Catania',
      'otherTeam' => 'Palermo',
      'homeTeamPoints' => 25,
      'otherTeamPoints' => 5,
    ],
]
?> 

<ul>
    <?php foreach ( $basketballTeams as $match ) { ?>
        <li>
            <pre>
                <?php echo $match['homeTeam'] . ' - ' . $match['otherTeam']. ': ' . $match['homeTeamPoints'] . ' - ' . $match['otherTeamPoints']; ?>
            </pre>
        </li>
    <?php } ?>
</ul>