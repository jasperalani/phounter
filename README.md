## Counter

Counter for php foreach statements.

Reduces the 3 lines it takes into 2. Even though you can put two variable definitions on the same line.

#### With Phounter
```php
$array = [ 1, 2, 3, 4, 5, 6, 7, 8, 9, 10 ];
$counter = new Counter( 5 ); // One
foreach ( $array as $arr ) {
	echo $arr;  
	if ($counter->count()) break; // Two
}
```

#### Without
```php
$array   = [ 1, 2, 3, 4, 5, 6, 7, 8, 9, 10 ];
$count   = 5; // One
$counter = 0; // Two
foreach ( $array as $arr ) {
	echo $arr;
	if ( $counter++ && $counter > ( $count - 1 ) ) die; // Three
}
```

Output: `12345`

###### no for loops here