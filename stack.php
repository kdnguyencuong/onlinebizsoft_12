<?php 
	class Stack extends SPLStack{

	}

	$myBooks = new Stack();

	//Kiểm tra stack rỗng hay không
	if($myBooks->isEmpty()){
		echo 'Stack is Empty!';
	}

	echo '<br>';

	$myBooks->push('A Dream of Spring');
	$myBooks->push('The Winds of Winter');
	$myBooks->push('A Dance with Dragons');
	$myBooks->push('A Feast for Crows');
	$myBooks->push('A Storm of Swords'); 
	$myBooks->push('A Clash of Kings');
	$myBooks->push('A Game of Thrones');

	foreach ($myBooks as $key => $book) {
	    echo 'Key :'.$key.' Value :'.$book . "<br>"; // prints last item first!
	}

	$myBooks->pop();

	$myBooks->pop();

	echo '<br>';

	//Sau khi xóa 2 phần tử
	foreach ($myBooks as $key => $book) {
	    echo 'Key :'.$key.' Value :'.$book . "<br>"; // prints last item first!
	}

	// vị trí point
	echo 'Top :'.$myBooks->top();

	echo '<br>';

	echo 'Bottom :'.$myBooks->bottom();

	echo '<br>';
	$myBooks->add(0,'Cường');
	$myBooks->add(1,'Nguyễn Văn A');

	foreach ($myBooks as $key => $book) {
	    echo 'Key :'.$key.' Value :'.$book . "<br>"; // prints last item first!
	}

	echo '<br>';
	$myBooks->rewind();

	foreach ($myBooks as $key => $book) {
	    echo 'Key :'.$key.' Value :'.$book . "<br>"; // prints last item first!
	}


	
?>