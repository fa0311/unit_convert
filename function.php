function unit_convert($size, $num = 0)
{
    $unit = ["","K","M","G","T","P","E","Z","Y"];
    if(1024 ** $num > $size and $unit[$num - 1] == null){
        return($size / (1024 ** 8).$unit[8]."B");
    }elseif(1024 ** $num > $size){
        return($size / (1024 ** ($num - 1)).$unit[$num - 1]."B");
    }else{
        return(unit_convert($size, $num + 1));
    }
    }
