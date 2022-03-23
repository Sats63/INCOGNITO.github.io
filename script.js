var intervalID = window.setInterval(updateScreen, 200);
var console = document.getElementById("console");

var txt = [
    "FORCE ASSCESS ACTIVATED",
    "================================================",
    "ACCESSING YOUR SYSTEM",
    "scanning ports...",
    "SATS READING DATA",
    "Priority 1 // local / scanning...",
    "BRUTE.EXE -r -z",
  "FORCE: XX0022. ENCYPT://000.222.2345",
  "TRYPASS: ********* AUTH CODE: ALPHA GAMMA: 1___ PRIORITY 1",
  "RETRY: REINDEER FLOTILLA",
  "Z:> /FALKEN/GAMES/TICTACTOE/ EXECUTE -PLAYERS 0",
  "================================================",
  "Priority 1 // local / scanning...",
  "scanning ports...",
  "BACKDOOR FOUND (23.45.23.12.00000000)",
  "BACKDOOR FOUND (13.66.23.12.00110000)",
  "BACKDOOR FOUND (13.66.23.12.00110044)",
  "...",
  "...",
  "BRUTE.EXE -r -z",
  "...locating vulnerabilities...",
  "...vulnerabilities found...",
  "MCP/> DEPLOY CLU",
  "SCAN: __ 0100.0200.0554.0080",
  "SCAN: __ 0020.0560.0553.0660",
  "SCAN: __ 1101.0000.0554.0550",
  "SCAN: __ 0012.0230.0553.0030",
  "SCAN: __ 0100.8900.0554.0080",
  "SCAN: __ 0020.0670.0553.0230",
  "Priority 1 // local / scanning...",
  "scanning ports...",
  "BACKDOOR FOUND (23.45.23.12.00000000)",
  "BACKDOOR FOUND (13.66.23.12.00110000)",
  "..............",
  "sats..",
  "SCAN: __ 0020.0560.0553.0660",
  "SCAN: __ 1101.0000.0554.0550",
  "SCAN: __ 0012.0230.0553.0030",
  "FORCE: XX0022. ENCYPT://000.222.2345",
  "TRYPASS: ********* AUTH",
  "CODE: ALPHA GAMMA: 1___ PRIORITY 1",
  "RETRY: REINDEER FLOTILLA",
  "Z:> /FALKEN/GAMES/TICTACTOE/ EXECUTE -PLAYERS 0",
]

var docfrag = document.createDocumentFragment();

function updateScreen() {
  //Shuffle the "txt" array
  txt.push(txt.shift());
  //Rebuild document fragment
  txt.forEach(function(e) {
    var p = document.createElement("p");
    p.textContent = e;
    docfrag.appendChild(p);
  });
  //Clear DOM body
  while (console.firstChild) {
    console.removeChild(console.firstChild);
  }
  console.appendChild(docfrag);
}