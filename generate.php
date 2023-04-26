<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = $_POST['name'];
  $gender = $_POST['gender'];
  $nationality = $_POST['nationality'];

  // データをグループに分ける
  $groups = array(
    'Group 1' => array(),
    'Group 2' => array(),
    'Group 3' => array(),
    'Group 4' => array(),
    'Group 5' => array(),
    'Group 6' => array(),
    'Group 7' => array(),
    'Group 8' => array()
  );

  // データをグループに追加
  $groups['Group 1'][] = array(
    'name' => $name,
    'gender' => $gender,
    'nationality' => $nationality
  );

  // グループを表示
  echo '<table>';
  foreach ($groups as $group => $people) {
    echo '<tr><th>' . $group . '</th></tr>';
    foreach ($people as $person) {
      echo '<tr><td>' . $person['name'] . ', ' . $person['gender'] . ', ' . $person['nationality'] . '</td></tr>';
    }
  }
  echo '</table>';
}
?>