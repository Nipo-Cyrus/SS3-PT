<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://img.utdstc.com/icon/163/844/163844fed46d7b335d8a5eac8a94e0203b544ffb44f8934bd94506635e58d4c8:200" type="image/x-icon">
    <title>Introduction</title>
</head>

<body>
 <h1><center>Introduce Yourself in Php Program</center></h1>
<!-- Insert the Php program inside the <body> in HTML -->
   <?php
        
        // Input the necessary variables for the Program, and Break down to it's specific parts
        $LASTNAME = "T. Apog";
        $FIRSTNAME = "Nipo Cyrus ";
        $Adrress_street = "Purok 5, Maria Cristina";
        $Adrress_municipal = "Balo-i, Lanao Del Norte";
        $Birthday = "20th of February";
        $Born = "2006";
        $Favorite_Food = "Pizza, Burgers and Fries";
        $Hobbies = "Badminton, Chess and Playing Online Games";

    //    The 1st paragraph consists of an introduction to the Author's, and a Greetings to the readers
        echo "<br>";
        echo "<br>";
        echo "Hi, Good day Everyone, I'm <b>$FIRSTNAME $LASTNAME</b> and I live in <b>$Adrress_street, $Adrress_municipal.</b> And Today I'm going to introduce Myself ";
        echo "<br>";
        echo "<br>";
    //  The 2nd Paragraph talks about the small part of the Author’s Life  
        echo " I was born in a hospital somewhere in <b>$Adrress_municipal</b> and it was the <b>$Birthday</b> in <b>$Born</b>. I have a very common lifestyle i don't have a typical skills, if i'm describe as a character i'll be one of the background characters.Also i don't celebrate my birthday every year starting from when i was 14yrs old I'm the middle one of our family and the only man on our family that's why i have a heavy burden me that keeps saying you should be succeed in life, it sometimes overwhelm me but my friends always encouraging me, that's why i keep moving forward. sometimes i play with my hobbies such are badminton, basketball and sometimes I play online games to ease my mind sometimes. my life doesn't have that much but i always enjoys it";
        echo "<br>";
        echo "<br>";
    
    //  The 3rd Paragraph contains the Author's views to the people he likes and his views to the people whom he dislikes.  
       
         echo "I've met a lot of people througout my life and i've encountered a lot of good ones, one whom i can call a friend is a person who have the same humour as me, the people who doesn't get offended much is a more likeable person than the ones who take every words seriously, My life become much more fun after encountering this interesting new people in my life, in the past i'm not even interested in the outside world, but now i'm an outgoing person because of this new friends i've met during my Senior Year. and Of course there's also people whom i hate despite the different in age i take everyone i hate with no respect nor i am kind to them, these are the people who keep being such a sucker to a teacher, the people who's irritating just because of how dumb can they be, i tried everything to help them but it's just that they can't simply understand anything i teach them, but i suppose their themselves in their own unique way.";
         echo "<br>";
        echo "<br>";
        
    //  The 4th paragraph contains the Author's favourites and dislikes.  
        
        echo "I have a lot of favorite food variety but only a small amount of them really stands out the <b>$Favorite_Food</b>, are really on my top-tier list of Foods that i like, they're not as healthy as one should put in their favorite food but to me i'd take the risk just to eat one of these becuse just as they say ''<i>You only live once and make the best out of it.</i>'' of course i also have some healthy favorites among them is the soy sauced string beans or the <i><b>Adobong Sitaw</b></i> it has a very crunchy feeling and a very deep taste of flavoring and also it's very healthy for the body it have different kind of good nutrients that can help develop the body. There os also some Foods that is not suited to my taste, this include the mostly of Vegetables such as  the <b>ladies Finger or <i>Okra</i></b> it had avery slimy texture that is horrible to me, i don't know why most people i know seems to like it, but to me it just doesn't suited to my tastes.";
        
        echo "<br>";
        echo "<br>";
        
    // The 5th paragraph contains the Author’s hobbies.
 
        echo "I also have Hobbies that can free me of Boredome sometimes these are <b>$Hobbies</b> these three are the Hobbies i frequently Play these Games because theu're quite compettive to me it can harness both my physical and mental state, of course sometimes i get fairly angry just because, i lost but to me it's perfecty normal, despite frequently becoming more aggressive to these Hobbies i still like them and i'm having fun doing them";
        echo "<br>";
        echo "<br>";
        
     // The 6th paragraph contains a thanking statement to the people who sorrounds him such as family and friends
         echo "I'm always thankful for those blessing i got in my daily life, i sometimes doesn't show my sincerity to the <b>AllFather</b> but i've been praying every night to thank him for this blessings i got, and i'm also thankful to my parents for raising to be a good son, and despite my shortcomings, they still love me, my parents are the greatest gift for me because they accepted me despite me being the problem child, I cherished my parente more than anyone in this world. I also want to thank the people who sorrounds me for being my Friends, without them i can't handle this pressure i felt everytime, they help me cope the sadness i feel everytime, they are the reasons why i can smile every single day that's why i cherished my Friends and that's the reason why their special to me";
            echo "<br>";
            echo "<br>";
            echo "<br>";
    ?>    
        
     
    <div align ="right">    
            <?php
                // The 7th paragraph  contains a Farewell paragraph from the author to the Readers.
                echo "<h2> I would like to thank you all For being here till the end, <br>this is my Introduction, the Author: $FIRSTNAME";
            ?>
    </div>

</body>
</html>