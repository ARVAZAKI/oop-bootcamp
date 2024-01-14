<?php
Class Lingkaran{
    public $nama = 'Lingkaran';
    public function area(int $r){
        return 3.14 *$r * $r;
    }
    public function circumference(int $r){
        return 2 * 3.14 * $r ;
    }
    public function enlarge(int $r, int $scale){
        return $r * $scale;
    }
    public function shrink(int $r, int $scale){
        return $r / $scale;
    }
}
Class Persegi{
    public $nama = 'Persegi';

    public function area(int $s){
        return $s * $s;
    }
    public function circumference(int $s){
        return 4 * $s ;
    }
    public function enlarge(int $s, int $scale){
        return $s * $scale;
    }
    public function shrink(int $s, int $scale){
        return $s / $scale;
    }
}
Class PersegiPanjang{
    public $nama = 'Persegi Panjang';

    public function area(int $p, int $l){
        return $p * $l;
    }
    public function circumference(int $p, int $l){
        return 2 * ($p + $l);
    }
    public function enlarge(int $p, int $scale,int $l){
        return $p * $scale * $l;
    }
    public function shrink(int $p,int $l, int $scale){
        return $p * $l / $scale;
    }
}
Class Descriptor{
    public static function describe($bangundatar, $value) {
        return 'Bangun datar ini adalah ' . $bangundatar->nama . ' yang memiliki luas ' . $bangundatar->area($value) . ' dan keliling ' . $bangundatar->circumference($value, $optionalValue = 1);
    }
}
$lingkaran = new Lingkaran();
$persegi = new Persegi();
$persegiPanjang = new PersegiPanjang();

echo Descriptor::describe($lingkaran, 14);
echo PHP_EOL;
echo Descriptor::describe($persegi, 10);
