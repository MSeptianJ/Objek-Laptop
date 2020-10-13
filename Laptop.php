<?php


class Laptop {
    var $brand;
    var $name;
    var $CPU;
    var $graphicCard;
    var $MemoryAmount;
    var $StorageAmount;

    function __Construct($brand, $name, $CPU, $graphicCard, $MemoryAmount, $StorageAmount) {
        $this->brand = $brand;
        $this->name = $name;
        $this->CPU = $CPU;
        $this->graphicCard = $graphicCard;
        $this->MemoryAmount = $MemoryAmount;
        $this->StorageAmount = $StorageAmount;
    }

    function showSpecs() {
        echo <<<HEREDOC
                <b>$this->brand<b><br>
                Name : $this->name <br>
                Cpu : $this->CPU <br>
                GraphicCard : $this->graphicCard <br>
                Memory : $this->MemoryAmount <br>
                Storage : $this->StorageAmount <br>
                HEREDOC;
    }

    function changeBrand($newBrand) {
        echo "Brand diganti dari ". $this->brand ." menjadi ". $newBrand;
        $this->brand = $newBrand;
    }
    function getBrand() {
        echo "Brand Laptop adalah ". $this->brand;
    }

    function changeName($newName) {
        $this->name = $newName;
    }
    function getName() {
        echo "Nama Laptop adalah ". $this->name;
    }

    function changeCPU($newCPU) {
        echo "CPU diganti dari ". $this->CPU ." menjadi ". $newCPU;
        $this->CPU = $newCPU;
    }
    function getCPU() {
        echo "CPU Laptop adalah ". $this->CPU;
    }

    function changeGraphicCard($newGraphicCard) {
        echo "VGA diganti dari". $this->graphicCard ." menjadi ". $newGraphicCard;
        $this->graphicCard = $newGraphicCard;
    }
    function getGraphicCard() {
        echo "Graphic Card Laptop adalah ". $this->graphicCard;
    }

    function changeMemory($newMemory) {
        echo "Memory diganti dari ". $this->MemoryAmount  ." menjadi ". $newMemory;
        $this->MemoryAmount = $newMemory;
    }
    function getMemory() {
        echo "Memory Laptop adalah ". $this->MemoryAmount;
    }

    function changeStorage($newStorage) {
        echo "Storage diganti dari ". $this->StorageAmount ." menjadi ". $newStorage;
        $this->StorageAmount = $newStorage;
    }
    function getStorage() {
        echo "Storage Laptop sebanyak ". $this->StorageAmount;
    }
}