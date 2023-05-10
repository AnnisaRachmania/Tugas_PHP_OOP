<?php

    class Product {
        protected $name;
        protected $price;
        protected $discount;

        public function setName($name) {
            $this->name = $name;
        }

        public function setPrice($price) {
            $this->price = $price;
        }

        public function setDiscount($discount) {
            $this->discount = $discount;
        }

        public function getPrice() {
            return $this->price;
        }

        public function getDiscount() {
            return $this->discount;
        }

        public function getName() {
            return $this->name;
        }
    }

    class CDMusic extends Product {
        private $artist;
        private $genre;

        public function setArtist($artist) {
            $this->artist = $artist;
        }

        public function setGenre($genre) {
            $this->genre = $genre;
        }

        public function getArtist() {
            return $this->artist;
        }

        public function getGenre() {
            return $this->genre;
        }

        public function calculatePrice() {
            $this->setPrice($this->getPrice() + ($this->getPrice() * 0.1)); 
        }

        public function calculateDiscount() {
            $this->setDiscount($this->getDiscount() + ($this->getDiscount() * 0.05)); 
        }
    }

    class CDRack extends Product {
        private $capacity;
        private $model;

        public function setCapacity($capacity) {
            $this->capacity = $capacity;
        }

        public function setModel($model) {
            $this->model = $model;
        }

        public function getCapacity() {
            return $this->capacity;
        }

        public function getModel() {
            return $this->model;
        }

        public function calculatePrice() {
            $this->setPrice($this->getPrice() + ($this->getPrice() * 0.15)); // Price increased by 15%
        }
    }

    // Simulasi
    $cdMusic = new CDMusic();
    $cdMusic->setName('Album Gemintang Hati');
    $cdMusic->setPrice(100000);
    $cdMusic->setDiscount(20);
    $cdMusic->setArtist('Tiara Andini');
    $cdMusic->setGenre('Pop');
    $cdMusic->calculatePrice();
    $cdMusic->calculateDiscount();

    $cdRack = new CDRack();
    $cdRack->setName('CD Rack A');
    $cdRack->setPrice(200000);
    $cdRack->setDiscount(30);
    $cdRack->setCapacity(50);
    $cdRack->setModel('Model A');
    $cdRack->calculatePrice();

    // Menampilkan hasil simulasi
    echo "<b>CD Music:</b><br>";
    echo "Nama CD: " . $cdMusic->getName() . "<br>";
    echo "Artist : " . $cdMusic->getArtist() . "<br>";
    echo "Genre  : " . $cdMusic->getGenre() . "<br>";
    echo "Harga  : " . $cdMusic->getPrice() . "<br>";
    echo "Discount Yang Didapat: " . $cdMusic->getDiscount() . "<br>";

    echo "<br>";

    echo "<b>CD Rack:</b><br>";
    echo "Nama CD Rack: " . $cdRack->getName() . "<br>";
    echo "Harga       : " . $cdRack->getPrice() . "<br>";
    echo "Discount    : " . $cdRack->getDiscount() . "<br>";
    echo "Capacity    : " . $cdRack->getCapacity() . "<br>";
    echo "Model       : " . $cdRack->getModel() . "<br>";

?>
