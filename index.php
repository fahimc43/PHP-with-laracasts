

    <?php
    $books = [
      [
          'name' => 'Do Androids Dream of Electric Sheep',
          'author' => 'Philip K. Dick',
          'releaseYear' => 1968,
          'purchaseUrl' => 'http://example.com'
      ],
      [
          'name' => 'Project Hail Mary',
          'author' => 'Andy Weir',
          'releaseYear' => 2021,
          'purchaseUrl' => 'http://example.com'
      ],
      [
          'name' => 'The Martian',
          'author' => 'Andy Weir',
          'releaseYear' => 2011,
          'purchaseUrl' => 'http://example.com'
      ],
  ];

  // $books = [
  //   'Do Androids Dream of Electric Sheep',
  //   'Project Hail Mary',
  //   'The Martian'
  // ]

  // function filter($items, $fun) {
  //   $filteredItems = [];
  //   foreach ($items as $item) {
  //     if ($fun($item)) {
  //       $filteredItems[] = $item;
  //     }
  //   }
  //   return $filteredItems;
  // };

  $filteredBooks =  array_filter($books, function($book){
    return $book['author'] === 'Philip K. Dick';
  });

  require "index.view.php";
    
  