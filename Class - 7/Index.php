<!-- Factorial -->
<?php
$num = 40;
$result = 1;

for($i = 1; $i <= $num; $i++){
   $result = $result * $i;
}
echo $result . '<br>';



// nested for loop
$num = 10;
for ($i = 0; $i <= $num; $i++){
    for ($j = 0; $j <= 10; $j++){
        echo "$i X $j = " . $i * $j . '<br>';
    }
    echo '<br>';
}


// Array traverse


$users = ['user1','user2','user3'];

for ($i = 0; $i < 3; $i++){
    echo $users [$i] . '<br>';
}

$users = ['user1','user2','user3'];
foreach($users as $user){
    echo $user . '<br>';
};



// global && local


$num = 30;
function test1 (){
    echo $GLOBALS ['num'];
}
test1();


function test(){
    $GLOBALS['user'] = 'user1';
}
test();

echo $GLOBALS['user'];