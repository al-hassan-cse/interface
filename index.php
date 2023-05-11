<?php

interface Sort 
{   
    public function getName($name);
    public function GetAge($name);
}


class SortImpl implements Sort{
    
    public function getName($name) :string
    {
        return  $name. ' sortArray1 method value';
    }
    public function GetAge($age) :string
    {
        return  $age. ' sortArray2 method value';
    }
}

$obj = new SortImpl;
echo $obj->getName("Al Hassan");
echo $obj->GetAge("30");
 
 
# note:
# ata akta singture, object create kora jai na
# interfface kono body thake na, declaration thake kintu defination thakbe na
# implements use korte hobe
# parameter same vabe dite hobe
# inteface method create korle seta class a call use korte hobe na hole error dibe
# multiplue use kora jai 
?>

