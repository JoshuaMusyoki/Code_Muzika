<?php

https://1480-41-139-168-163.ngrok-free.app//testapp/index.php

// Read the variables sent via POST from our API
$sessionId   = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$phoneNumber = $_POST["phoneNumber"];
$text        = $_POST["text"];

if ($text == "") {
     // This is the first request. Note how we start the response with
CON
     $response  = "CON Welcome to code muzika. \n\n";
     $response .= "1. Beats \n";
     $response .= "2. About \n";
     $response .= "3. Help \n";
     $response .= "4. Exit \n";

} else if ($text == "1") {
     // Business logic for first level response
     $response = "CON Choose beat type \n\n";
     $response .= "1. Code Muzika original by Marvin \n";
     $response .= "2. Ocean \n";
     $response .= "3. Acid \n";
     $response .= "4. Ambient \n";
     $response .= "5. Jungle \n";

}

else if($text == "1*1") {
     // This is a second level response where the user selected 1 in the
first instance
     // Business logic for first level response
     $response = "CON Choose: \n\n";
     $response .= "1. Sonic Pi code \n";
     $response .= "2. Music chords \n";


}

else if($text == "1*1*1") {

     // This is a terminal request. Note how we start the response with
END
     $response = "CON Do you want to pay KES 5 to Code Muzika? \n Enter
MPESA PIN:";

} else if($text == "1*1*1*1234") {
     // This is a second level response where the user selected 1 in the
first instance
     $cmo  = "\n
     Step 1: \n
     use_bpm 50
# Define the drum samples
kick = :bd_gas
snare = :mehackit_phone2
hihat = :guit_em9";

     // This is a terminal request. Note how we start the response with
END
     $response = "END code for CM song is:  ".$cmo;

} else if($text == "1*1*2") {
   // This is a terminal request. Note how we start the response with END
   $response = "CON Do you want to pay KES 5 to Code Muzika? \n Enter
MPESA PIN:";

}


else if($text == "1*1*2*1234") {
     // This is a second level response where the user selected 1 in the
first instance
     $chords  = "CON A, Bm, E, A. B,E,A. Bm,E,A. B,E,A. B,A. ";

     // This is a terminal request. Note how we start the response with
END
     $response = "END Chords for CM song:  ".$chords;

}
//song link
https://chordify.net/chords/kenyan-catholic-music-kenya-catholic
else if($text == "1*2") {
     // This is a second level response where the user selected 1 in the
first instance
     // Business logic for first level response
     $response = "CON Choose: \n\n";
     $response .= "1. Sonic Pi code \n";
     $response .= "2. Music chords \n";


} else if($text == "1*2*1") {
   // This is a terminal request. Note how we start the response with END
   $response = "CON Do you want to pay KES 5 to Code Muzika? \n Enter
MPESA PIN:";

}

else if($text == "1*2*1*1234") {
     // This is a second level response where the user selected 2 in the
first instance
     $ocean  = "# Coded by Sam Aaron
     Step 1:
with_fx :reverb, mix: 0.5 do
   live_loop :oceans do..
     ";

     // This is a terminal request. Note how we start the response with
END
     $response = "END code for ocean is: ".$ocean;

} else if($text == "1*2*2") {
   // This is a terminal request. Note how we start the response with END
   $response = "CON Do you want to pay KES 5 to Code Muzika? \n Enter
MPESA PIN:";

}
else if($text == "1*2*2*1234") {
     // This is a second level response where the user selected 1 in the
first instance
     $chords  = "A, Bm, E, A. B,E,A. Bm,E,A. B,E,A. B,A. ";

     // This is a terminal request. Note how we start the response with
END
     $response = "END Chords for ocean:  ".$chords;

}else if($text == "1*3") {
     // This is a second level response where the user selected 1 in the
first instance
     // Business logic for first level response
     $response = "CON Choose: \n\n";
     $response .= "1. Sonic Pi code \n";
     $response .= "2. Music chords \n";


}else if($text == "1*3*1") {
   // This is a terminal request. Note how we start the response with END
   $response = "CON Do you want to pay KES 5 to Code Muzika? \n Enter
MPESA PIN:";

}

  else if($text == "1*3*1*1234") {
     // This is a second level response where the user selected 3 in the
first instance
     $acid  = "# Coded by Sam Aaron
     Step 1:
use_debug false
load_sample :bd_fat...
  ";

     // This is a terminal request. Note how we start the response with
END
     $response = "END code for acid is: ".$acid;

}else if($text == "1*3*2") {
   // This is a terminal request. Note how we start the response with END
   $response = "CON Do you want to pay KES 5 to Code Muzika? \n Enter
MPESA PIN:";

}

else if($text == "1*3*2*1234") {
     // This is a second level response where the user selected 1 in the
first instance
     $chords  = "A, Bm, E, A. B,E,A. Bm,E,A. B,A,A. B,A. ";

     // This is a terminal request. Note how we start the response with
END
     $response = "END Chords for acid:  ".$chords;

}else if($text == "1*4") {
     // This is a second level response where the user selected 1 in the
first instance
     // Business logic for first level response
     $response = "CON Choose: \n\n";
     $response .= "1. Sonic Pi code \n";
     $response .= "2. Music chords \n";


}else if($text == "1*4*1") {
   // This is a terminal request. Note how we start the response with END
   $response = "CON Do you want to pay KES 5 to Code Muzika? \n Enter
MPESA PIN:";

}

else if($text == "1*4*1*1234") {
    // This is a second level response where the user selected 3 in the
first instance
    $ambient  = "# Coded by Sam Aaron
Step 1:
load_samples(sample_names :ambi)
sleep 2...";

    // This is a terminal request. Note how we start the response with
END
    $response = "END code for ambient is: ".$ambient;

}else if($text == "1*4*2") {
   // This is a terminal request. Note how we start the response with END
   $response = "CON Do you want to pay KES 5 to Code Muzika? \n Enter
MPESA PIN:";

}else if($text == "1*4*2*1234") {
     // This is a second level response where the user selected 1 in the
first instance
     $chords  = "A, Bm, E, A. B,E,A. Bm,E,A. B,A,A. B,A. ";

     // This is a terminal request. Note how we start the response with
END
     $response = "END Chords for acid:  ".$chords;

}

else if($text == "1*5") {
    // This is a second level response where the user selected 3 in the
first instance
    $jungle  = "
# Coded by Sam Aaron
Step 1:
use_bpm 50
with_fx :lpf, cutoff: 90 do
with_fx :reverb, mix: 0.5 do
with_fx :compressor, pre_amp: 40 do...";

    // This is a terminal request. Note how we start the response with
END
    $response = "END code for ambient is: ".$jungle;

}else if ($text == "2") {
     // Business logic for first level response
     // This is a terminal request. Note how we start the response with
END
     $response = "END \n Code Muzika is a USSD based code repository
aimed at musicians & music enthusiasts \n who may not be connected to
the internet but have feature phones. \n\n";

}

else if ($text == "3") {
     // Business logic for first level response
     // This is a terminal request. Note how we start the response with
END
     $response = "END Please call +254 xxx xxx xxx, a Code muzika
customer care agent will assist you. ";

}

else if($text == "4") {
    // This is a terminal request. Note how we start the response with
END
    $response = "END ";

}

// Echo the response back to the API
header('Content-type: text/plain');
echo $response;
