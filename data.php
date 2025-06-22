<?php 

$title = "Cinematique";

$images = [
	"https://cdn.pixabay.com/photo/2019/04/24/21/55/cinema-4153289_640.jpg",
	"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT_GniliWPIs2fESTLqAoMUR2GoCBtwOf4iXA&s",
	"https://static.vecteezy.com/system/resources/thumbnails/005/502/524/small_2x/cinema-background-concept-movie-theater-object-on-red-curtain-background-and-movie-time-with-electric-bulbs-frame-illustration-free-vector.jpg"
];

$movies = [
    [
        'id' => 1,
        'title' => 'The Shawshank Redemption',
        'year' => 1994,
        'description' => 'This drama, based on a Stephen King novella, tells the story of Andy Dufresne, a man wrongly imprisoned for murder. Through hope, friendship, and resilience, Andy\'s journey inside Shawshank Prison captivates viewers with its powerful message about freedom and the human spirit.',
        'image' => 'https://m.media-amazon.com/images/S/pv-target-images/d26b48f88d5398cad86d2fd26d32b258d43e51d4e2f949c3848be69a1e147446.jpg',
        'rating' => 9.3
    ],
    [
        'id' => 2,
        'title' => 'The Godfather',
        'year' => 1972,
        'description' => 'Francis Ford Coppola\'s masterpiece dives into the world of the Italian-American mafia, exploring themes of family, power, and loyalty. With unforgettable characters like Vito and Michael Corleone, the film is a gripping saga of crime and consequence.',
        'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR-VlDehpQ8NRlajnSpNm_AdqLMGx8NPt1yjQ&s',
        'rating' => 9.2
    ],
    [
        'id' => 3,
        'title' => 'Inception',
        'year' => 2010,
        'description' => 'A mind-bending sci-fi thriller directed by Christopher Nolan, Inception explores the world of dreams within dreams. With stunning visuals and a complex plot, it challenges viewers to question reality and perception.',
        'image' => 'https://m.media-amazon.com/images/I/81p+xe8cbnL._UF1000,1000_QL80_.jpg',
        'rating' => 8.8
    ], //aa
     [
        'id' => 4,
        'title' => 'Avatar: The Way of Water',
        'year' => 2022,
        'description' => 'This epic sci-fi sequel to James Cameron\'s Avatar follows Jake Sully and Neytiri as they face new challenges and threats to their family in the lush, underwater ecosystems of Pandora. It pushes the boundaries of visual effects and underwater filming techniques.',
        'image' => 'https://lumiere-a.akamaihd.net/v1/images/p_disneyplusoriginals_avatar_thewayofwater_poster_rebra_fa08636d.jpeg',
        'rating' => 9.3
    ],
     [
        'id' => 5,
        'title' => 'Spider-Man: No Way Home',
        'year' => 2012,
        'description' => 'In this action-packed Marvel film, Peter Parker faces the consequences of his secret identity being revealed. He seeks help from Doctor Strange, inadvertently causing a rift in the multiverse that brings villains from other realities.',
        'image' => 'https://resizing.flixster.com/8PNiwC2bpe9OecfYZSOVkvYC5vk=/ems.cHJkLWVtcy1hc3NldHMvbW92aWVzL2U5NGM0Y2Q1LTAyYTItNGFjNC1hNWZhLWMzYjJjOTdjMTFhOS5qcGc=',
        'rating' => 9.3
    ],
     [
        'id' => 6,
        'title' => 'Avengers: Endgame',
        'year' => 2019,
        'description' => 'The epic conclusion to the Avengers saga. After the devastating events of Infinity War, the Avengers reunite to undo Thanos’ snap and save the universe in one final battle.',
        'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ7QP_0upx1_Iqu5VyRyk8xacajdfkHke3LaQ&s',
        'rating' => 9.3
    ],
     [
        'id' => 7,
        'title' => 'The Lion King',
        'year' => 2019,
        'description' => 'A live-action (or more accurately, CGI) remake of Disney’s 1994 animated classic. Simba, a young lion prince, must reclaim his throne after his father\'s untimely death.',
        'image' => 'https://m.media-amazon.com/images/I/71wgqLl2v5L.jpg',
        'rating' => 9.3
    ],
    [
        'id' => 8,
        'title' =>  'The Batman',
        'year' => 2022,
        'description' => 'A darker, more detective-focused take on the Batman mythos, this film stars Robert Pattinson as the brooding Gotham City vigilante who uncovers a web of corruption tied to his family\'s legacy.',
        'image' => 'https://m.media-amazon.com/images/S/pv-target-images/3de84cca07fc963b66a01a5465c2638066119711e89c707ce952555783dd4b4f.jpg',
        'rating' => 9.3
    ],
    [
        'id' => 9,
        'title' =>  'A Minecraft movie',
        'year' => 2025,
        'description' => 'I AM STEVE. Flint and steel. the nether. Ender perl. Chicken jockey. Steve\'s lava chicken',
        'image' => 'https://upload.wikimedia.org/wikipedia/en/thumb/6/66/A_Minecraft_Movie_poster.jpg/250px-A_Minecraft_Movie_poster.jpg',
        'rating' => 9.3
    ]
]; 

$data3 = [
     [
        'id' => 1,
        'title' => 'The Shawshank Redemption',
        'year' => 1994,
        'description' => 'This drama, based on a Stephen King novella, tells the story of Andy Dufresne, a man wrongly imprisoned for murder. Through hope, friendship, and resilience, Andy\'s journey inside Shawshank Prison captivates viewers with its powerful message about freedom and the human spirit.',
        'rating' => 9.3,
        'a' => 'collapseOne'
    ],
    [
        'id' => 2,
        'title' => 'The Godfather',
        'year' => 1972,
        'description' => 'Francis Ford Coppola\'s masterpiece dives into the world of the Italian-American mafia, exploring themes of family, power, and loyalty. With unforgettable characters like Vito and Michael Corleone, the film is a gripping saga of crime and consequence.',
        'rating' => 9.2,
        'a' => 'collapseTwo'
    ],
    [
        'id' => 3,
        'title' => 'Inception',
        'year' => 2010,
        'description' => 'A mind-bending sci-fi thriller directed by Christopher Nolan, Inception explores the world of dreams within dreams. With stunning visuals and a complex plot, it challenges viewers to question reality and perception.',
        'rating' => 8.8,
        'a' => 'collapseThree'
    ]
];