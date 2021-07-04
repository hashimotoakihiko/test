<?php

//PHPの基礎3 課題
  //出題範囲
  //・クラス・メソッド ・プロパティ ・アクセス修飾子 ・継承
  //所要時間45分 注意事項
  //・クラス内ではアクセス修飾子を必ず記述すること
  //・クラス内でフィールドにアクセスする際、フィールドにアクセスることを明示する「$this」キーワードを 必ず記述す ること

//設問

//1. クラスの作成
  //乗り物を意味するクラス、class Vehicleを次の通り作成しなさい。
  // Q1

//2. プロパティの追加
  //1の続き、 class Vehicleの速度を表すプロパティ、$velocityを追加しなさい。
  //$velocityには自由にアクセスできるように、アクセス修飾子をpublicとすることとし、 初期値は0と する。

//3. インスタンスの生成
  //2の続き、 class Vehicleのインスタンスを生成しなさい。 
  //$vehicleという変数にインスタンスを代入すること。

//4. プロパティへのアクセス
  //3の続き、 $vehicleを使って$velocityにアクセスし、 10を代入し、出力しなさい。
  // 出力 例) 10

//例
  // class Sample {
  //     public $name;
  // }
  // $sample1 = new Sample();
  // $sample1->name = '太郎';
  // echo $sample2->name;

//回答
  // class Vehicle{
  //   public $velocity = 0;
  // }
  //   $vehicle1 = new Vehicle();
  //   $vehicle1->velocity = 10;
  //   echo $vehicle1->velocity;
?>

<?php
//5. プロパティへのアクセス制限
  //4の続き、 $velocityのアクセス修飾子をprivateに変更しなさい。
  //変更したら、ブラウザをリロード・エラーを確認し、4問目で追加した処理をコメントアウトするこ と。

//6. メソッドの追加1
  //5の続き、 class Vehicle内に、プロパティ$velocityを呼び出して、 その値をセットするためのメソッド、
  //setVelocity($velocity)を作成しなさい。 引数は、プロパティ$velocityに代入するために利用する 
  //アクセス修飾子はpublicとし、$vehicleを使って呼び出し、50を渡しなさい。

// class Vehicle{
//   private $velocity = 50;
//   // public $velocity = 0;
  
//   public function setVelocity($velocity){
//     echo $this->velocity;
//   }
// }

// $vehicle1 = new Vehicle();
// $vehicle1->setVelocity($velocity);


//7. メソッドの追加2
  //6の続き、 class Vehicle内に、プロパティ$velocityを呼び出して、 返り値として返すためのメソッド、getVelocity()を作成しなさい。 
  //アクセス修飾子はpublicとし、$vehicleを使って呼び出し、echoすること。
  //出力例) 50

  // class Vehicle{
  //   private $velocity = 50;
  //   public function setVelocity($velocity){
  //     echo $this->velocity;
  //   }
  //   public function getVelocity(){
  //     echo $this->$vehicle;
  //   }
  // }
  
  // $vehicle1 = new Vehicle();
  // $vehicle1->setVelocity($velocity);

//8. メソッドのアクセス制限
  //7の続き、 6問目、7問目で作成したsetVelocity($velocity)とgetVelocity()の
  //アクセス修飾子をprotectedに変更しなさい。 
  //変更したら5問目同様に確認し、$vehicleの処理を全てコメントアウトすること

  // class Vehicle{
  //   protected $velocity = 50;
  //   public function setVelocity($velocity){
  //     echo $this->velocity;
  //   }
  //   public function getVelocity($velocity){
  //     echo $this->$vehicle;
  //   }
  // }
  
  // $vehicle1 = new Vehicle();
  // $vehicle1->setVelocity($velocity);

//9. クラスの継承1
  //8の続き、 class Vehicleを継承した、乗用車を意味するクラス、
  //classCarを作成しなさい。
  //プロパティは車体色を意味する$color、
  //ナンバープレートを意味する$licensePlateとし、 
  //アクセス修飾子はprivateとする。

//10. コンストラクターの利用1
  //9の続き、コンストラクターとはインスタンス生成時に必ず呼ばれるメソッドのことである。 
  //class Carに__construct($velocity = 0, $color = null,$licensePlate = null
  //というメソッドを追加しなさい。 続けてインスタンス生成を行い、$carという変数に代入しなさい。

  class Vehicle{
    protected $velocity = 50;
    public function setVelocity($velocity){
      echo $this->velocity;
    }
    public function getVelocity($velocity){
      echo $this->$vehicle;
    }

  }

  class Car extends Vehicle {
    private $color;
    private $licensePlate; 

    // public function __construct($velocity = 0, $color = null,$licensePlate = null){
    //   return $this->$color;
    //   return $this->$licensePlate;
    // }
    public function getcolor(){
      return $this->color;
    }
    public function getlicensePlate(){
      return $this->licensePlate;
    }

    public function setcolor($color){
      return $this->color = $color;
    }
    public function setlicensePlate($licensePlate){
      return $this->licensePlate = $licensePlate;
    }
  }
  $car = new Car();
  $car->setcolor('赤');
  $car->setlicensePlate('0906');

  echo '色:'. $car->getcolor('赤') .'<br>';
  echo 'ナンバープレート:'. $car->getlicensePlate('0906') .'<br>';


// class Sample{
//   public $name;
//   public function __construct($name) {
//     echo 'インスタンスを生成しました。<br>';
//     $this->name = $name; 
//   }
//   public function showName(){
//     echo '名前: ' $this->name . '<br>'; 
//   }
// }
// $sample = new Sample('太郎'); 
// $sample->showName();

// /*
// 出力結果) インスタンスを生成しました。 名前: 太郎
// */
?>

