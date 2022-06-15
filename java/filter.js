let allgames = document.getElementsByClassName("fil");
let filters = document.getElementsByClassName("filter");


//back-end
let action = document.getElementById("checkbox-action");
action.onchange = function () {
    if (action.checked === true) {
        for (let i = 0; i < allgames.length; i++){
            if (allgames[i].dataset.category === "action") {
                allgames[i].style.display = "block"
            }

        }
    }
    else {
        for (let i = 0; i < allgames.length; i++){
            if (allgames[i].dataset.category === "action") {
                allgames[i].style.display = "none"
            }

        }
    }
}

//translation
let comedie = document.getElementById("checkbox-comedie");
comedie.onchange = function () {
    if (comedie.checked === true) {
        for (let i = 0; i < allgames.length; i++){
            if (allgames[i].dataset.category === "comedie") {
                allgames[i].style.display = "block"
            }

        }
    }
    else {
        for (let i = 0; i < allgames.length; i++){
            if (allgames[i].dataset.category === "comedie") {
                allgames[i].style.display = "none"
            }

        }
    }
}

//logo
let marvel = document.getElementById("checkbox-marvel");

marvel.onchange = function () {
    if (marvel.checked === true) {
        for (let i = 0; i < allgames.length; i++){
            if (allgames[i].dataset.category === "marvel") {
                allgames[i].style.display = "block"
            }

        }
    }
    else {
        for (let i = 0; i < allgames.length; i++){
            if (allgames[i].dataset.category === "marvel") {
                allgames[i].style.display = "none"
            }

        }
    }
}

let horror = document.getElementById("checkbox-horror");

horror.onchange = function () {
    if (horror.checked === true) {
        for (let i = 0; i < allgames.length; i++){
            if (allgames[i].dataset.category === "horror") {
                allgames[i].style.display = "block"
            }

        }
    }
    else {
        for (let i = 0; i < allgames.length; i++){
            if (allgames[i].dataset.category === "horror") {
                allgames[i].style.display = "none"
            }

        }
    }
}

const SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;

const message = document.getElementById("message");
const output = document.getElementById("result");
const image1 = document.getElementById("image1");

startRecognition = () => {
  if (SpeechRecognition !== undefined) { // test if speechrecognitio is supported
    let recognition = new SpeechRecognition();
    recognition.lang = 'nl-NL'; // which language is used?
    recognition.interimResults = false; // https://developer.mozilla.org/en-US/docs/Web/API/SpeechRecognition/interimResults
    recognition.continuous = false; // https://developer.mozilla.org/en-US/docs/Web/API/SpeechRecognition/continuous
   
    recognition.onstart = () => {
      message.innerHTML = `begin met luisteren <br>zeg help, rest of log in`;
      output.classList.add("hide"); // hide the output
    };

    recognition.onspeechend = () => {
      message.innerHTML = `Ik ben gestopt met luisteren `;
      recognition.stop();
    };

    recognition.onresult = (result) => {
        let transcript = result.results[0][0].transcript;
        let confidenceTranscript= Math.floor(result.results[0][0].confidence * 100); // calc. 'confidence'
        output.classList.remove("hide"); // show the output
        output.innerHTML = `Ik ben ${confidenceTranscript}% zeker dat je zojuist dit zei: <b>${transcript}</b>`;
        actionSpeech(transcript);
      };

    recognition.start();
  } 
  else {  // speechrecognition is not supported
    message.innerHTML = "sorry speech to text is not supported in this browser";
  }
};

// process speech results
actionSpeech = (speechText) => {
  speechText = speechText.toLowerCase().trim(); // trim spaces + to lower case
  console.log(speechText); // debug 
  switch(speechText){ 
    case  "reset":
      document.body.style.background = "#ffe6ab";
      document.body.style.color="#000000";
      image1.classList.add("hide"); // hide image (if any)
      break;
    case "help":
      alert("Click a movie to see if its good enough to waste your time on 😁");
      case "log in":
        window.open("http://localhost/bo4/slystream/php/login.php", "_self");
        break;

  
      // do nothing yet
  }
}
 