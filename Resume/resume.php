<?php
    echo "Hello World!";
    $nama = "Muhammad Nurudin Hidayat"; // ini string
    $nim = 192410101084; //ini integer
    $variable_double = 1.1; // ini double
    $variable_array = []; //ini array
?>


<?php for ($i=0; $i < 5; $i++) { 
    echo "Hello world!";
    
}
?>

<?php for ($i=0; $i < 5; $i++) { 
    if($i % 2 === 0) {
    echo "Ini angka genap";
    }
}
?>

    
<?php
    $array = ["wortel", "sawi", "bayam"];
    var_dump($array);
?>

<?php foreach ($array as $sayuran) {
    echo $sayuran . " ";
}
?>

<?php
	$mahasiswa = ["Muhammad Nurudin H", "192410101084", "Lumajang"];
?>

<?php 
    $barang = [
        [
            'nama' == 'pisang goreng',
            'harga' == '5000',
        ],
        [
            'nama' == 'jus buah',
            'harga' == '6000',
        ],

    ];
?>

<!DOCTYPE html>
<html>
<body>
	<table>
    	<thead>
        	<tr>
            	<li>Nama</li>
                <li>Nim</li>
                <li>Alamat</li>
            </tr>
        </thead>
        <tbody>
        	<tr>
            	<td><?= $mahasiswa[0]; ?></td>
                <td><?= $mahasiswa[1]; ?></td>
                <td><?= $mahasiswa[2]; ?></td>
            </tr>
        </tbody>
	</table>
</body>
</html>
