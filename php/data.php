<?php

declare(strict_types=1);

// This file is for arrays, such as posts, authors and info
// Every $post contains title, content, author, date and number of likes

    // $posts = [
    //   [
    //     'title' => '',
    //     'content' => '',
    //     'author' => [
    //       'id' => '',
    //       'name' => '',
    //       'picture' => '',
    //     ],
    //
    //     'date' => '',
    //     'likes' => '',
    //   ],
    // ];

$file = file_get_contents(__DIR__.'/posts.json');

// echo $file;

var_dump(json_decode($file, true));

// var_dump($posts);

// $posts = [
//   [
//     'title' => "What are you looking at, mother fucker!",
//     'content' => "Whoa, spoilers! I'm a whole season behind. Since we're fighting, if you ever have an affair with that guy, I will come to the hotel room and blow my brains out all over your naked bodies. Yea and I made the stars that became the carbon in your mothers ovaries! I do not have discolored butthole flaps.
//     He threatened to turn me in to the government, so I made him and the government go away! Not so fast Morty. You heard your mom. We've got adventures to go on, Morty. Just you and me. And sometimes your sister, and sometimes your mom, but never your dad. You wanna know why, Morty? Because he crossed me. He's not pressing charges. That's gotta be the you shot me equivalent of not being mad. And? What more do you want tacked on to this? I turned myself into a pickle, and 9/11 was an inside job?",
//
//     'author' => [
//       'id' => 1,
//       'name' => 'Rick Sanchez',
//       'picture' => 'images/rick_sanchez.png',
//     ],
//
//     'date' => '2017-09-30',
//     'likes' => 1,
//   ],
//
//   [
//     'title' => "Sometimes science is a lot more art, than science. ",
//     'content' => "You’re like Hitler, but even Hitler cared about Germany or something. A price for everything. Puffy vagina. Sometimes science is a lot more art, than science. A lot of people don't get that.
//     I mean, why would a poptart want to live inside a toaster, Rick? I mean, that would be like the scariest place for them to live. You know what I mean? It's been six hours. Dreams move one... one-hundredth the speed of reality, and dog time is one-seventh human time. So y'know, every day here is like a minute. It's like Inception, Morty, so if it's confusing and stupid, then so is everyone's favorite movie. Existence is pain to a meeseeks Jerry, and we will do anything to alleviate that pain. Hello Jerry, come to rub my face in urine again?",
//
//     'author' => [
//       'id' => 2,
//       'name' => 'Simple Rick',
//       'picture' => 'images/simple_rick.png'
//     ],
//
//     'date' => '2017-10-11',
//     'likes' => 5,
//   ],
//
//   [
//     'title' => "There's pros and cons to every alternate timeline.",
//     'content' => "Listen, Morty, I hate to break it to you but what people call love is just a chemical reaction that compels animals to breed. Morty, can you get to the left nipple? Wha, me irresponsible ?! All I wanted you to do was to hand me a screwdriver, Morty! Don't be trippin dog we got you.
//     Cause he roped me into this! Aw, c'mon Rick. That doesn't seem so bad. God-damn! I am not putting my father in a home! He just came back into my life, and you want to, grab him and, stuff him under a mattress like last month's Victoria's Secret?!",
//
//     'author' => [
//       'id' => 3,
//       'name' => 'Doofus Rick',
//       'picture' => 'images/doofus_rick.png',
//     ],
//
//     'date' => '2017-09-25',
//     'likes' => 10,
//   ],
//
//   [
//     'title' => "Come on, flip the pickle, Morty. You're not gonna regret it. ",
//     'content' => "Well then get your shit together. Get it all together and put it in a backpack, all your shit, so it's together. ...and if you gotta take it somewhere, take it somewhere ya know? Take it to the shit store and sell it, or put it in a shit museum. I don't care what you do, you just gotta get it together... Get your shit together. Aids! Alien Invasion Tomato Monster Mexican Armada Brothers Who Are Just Regular Brothers Running In A Van From An Asteroid And All Sorts Of Things: The Movie. Since we're fighting, if you ever have an affair with that guy, I will come to the hotel room and blow my brains out all over your naked bodies.",
//
//     'author' => [
//       'id' => 4,
//       'name' => 'Pickle Rick',
//       'picture' => 'images/pickle_rick.png'
//     ],
//
//     'date' => '2017-10-15',
//     'likes' => 25,
//   ],
//
//   [
//     'title' => 'Tiny Rick!!',
//     'content' => "I know the two of you are very different from each other in a lot of ways, but you have to understand that as far as Grandpa's concerned, you're both pieces of shit! Yeah. I can prove it mathematically. Actually, l-l-let me grab my whiteboard. This has been a long time coming, anyways. This is because you give Morty Smith bad grades, bitch! Those guys are inside you building a piece of shit Ethan! They're inside you building a monument to compromise! Fuck them, fuck those people, fuck this whole thing Ethan. Don't be trippin dog we got you.
//     Yeah, sure, I mean, if you spend all day shuffling words around, you can make anything sound bad. I do not have discolored butthole flaps. Oh, that's Million Ants. I can't see the ants from over here, I just assumed that was um.. Turd Man, Wiggly Turd Man. I am Mr. Booby Buyer. I'll buy those boobies for 25 schmeckles!",
//
//     'author' => [
//       'id' => 5,
//       'name' => 'Tiny Rick',
//       'picture' => 'images/tiny_rick.png'
//     ],
//
//     'date' => '2017-10-05',
//     'likes' => 90,
//   ],
//
//   [
//     'title' => "Fuck you, God! Not today bitch!",
//     'content' => "It's fine, everythings is fine. theres an infinite number of realities Morty, and in a few dozens of those i got lucky and turned everything back to normal. Thanks Noob Noob, this guy gets it. Since we're fighting, if you ever have an affair with that guy, I will come to the hotel room and blow my brains out all over your naked bodies. Cause he roped me into this!
//     I mixed in some praying mantis DNA. You know a praying mantis is the exact opposite of a vole, Morty? They mate once and then bluergh cut each other's heads off. Are these pills supposed to wake me up or something? Wubba lubba dub dub! God, Grandpa, you're such a dick.",
//
//     'author' => [
//       'id' => 1,
//       'name' => 'Rick Sanchez',
//       'picture' => 'images/rick_sanchez.png',
//     ],
//
//     'date' => '2017-10-20',
//     'likes' => 28,
//   ],
//
//   [
//     'title' => "And that's the wayyy, the news goes!",
//     'content' => "I don't get it, and I don't need to. Oh good job Morty! You killed my best customer but you saved a mind reading fart! My man! Oh, I'm sorry Morty, are you the scientist or are you the kid who wanted to get laid?
//     You're talking about Inception? My name is Slip- Slippery Stair. I'll take ya down there for 25 shmeckels! Then it's time to get your beak wet tonight playa! Flip the pickle over.",
//
//     'author' => [
//       'id' => 2,
//       'name' => 'Simple Rick',
//       'picture' => 'images/simple_rick.png'
//     ],
//
//     'date' => '2017-09-15',
//     'likes' => 2,
//   ],
//
//   [
//     'title' => "I'd like to order one large person with extra people please. white people, no no no black people... and hispanic on half.",
//     'content' => "Uh ohhh! Somersault jump! Not MY fault this is happening. Don't Morty me! I tricked Rick into taking Dad on an adventure because I thought I could get a break from this kind of shit! But no! Like father, like goddamn daughter! You wanna be like Rick?! Congratulations! You're just as arrogant and just as irresponsible! Do you know how many characters there are in the Simpsons Morty? There's like a-a billion characters, M-Morty. There was an episode where Former President BUSH was their neighbor!",
//
//     'author' => [
//       'id' => 3,
//       'name' => 'Doofus Rick',
//       'picture' => 'images/doofus_rick.png',
//     ],
//
//     'date' => '2017-08-28',
//     'likes' => 7,
//   ],
//
//   [
//     'title' => "They're robots Morty! It's okay to shoot them!",
//     'content' => "I'm Mr. Crowbar, and here is my friend, who is also a crowbar! I know the two of you are very different from each other in a lot of ways, but you have to understand that as far as Grandpa's concerned, you're both pieces of shit! Yeah. I can prove it mathematically. Actually, l-l-let me grab my whiteboard. This has been a long time coming, anyways. Haha god-damn! Why don't you ask the smartest people in the universe, Jerry? Oh yeah you can't. They blew up.",
//
//     'author' => [
//       'id' => 4,
//       'name' => 'Pickle Rick',
//       'picture' => 'images/pickle_rick.png',
//     ],
//
//     'date' => '2017-09-08',
//     'likes' => 9,
//   ],
//
//   [
//     'title' => 'Rikitikitavi, bitch!',
//     'content' => "Who cares, Morty? Global acts of terrorism happen every day. Uh, here's something that's never happened before—I'm a pickle! I'm Pickle Ri-i-i-ick! You're growing up fast, Morty. You're going into a great big thorn straight into my ass. Well then get your shit together. Get it all together and put it in a backpack, all your shit, so it's together. ...and if you gotta take it somewhere, take it somewhere ya know? Take it to the shit store and sell it, or put it in a shit museum. I don't care what you do, you just gotta get it together... Get your shit together. I wish that shotgun was my penis.",
//
//     'author' => [
//       'id' => 5,
//       'name' => 'Tiny Rick',
//       'picture' => 'images/tiny_rick.png',
//     ],
//
//     'date' => '2017-10-03',
//     'likes' => 3,
//   ],
//
// ];
