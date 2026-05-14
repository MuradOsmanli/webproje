<div id="terminal-launcher" onclick="toggleTerminal()" style="position: fixed; bottom: 20px; left: 20px; cursor: pointer; z-index: 1000;">
    <i class="bi bi-terminal-fill" style="font-size: 2.5rem; color: #0f0; filter: drop-shadow(0 0 5px #0f0);"></i>
</div>

<div id="terminal-window" style="display: none; position: fixed; bottom: 85px; left: 20px; width: 350px; height: 260px; background: rgba(0,0,0,0.95); border: 1px solid #0f0; border-radius: 10px; z-index: 1000; font-family: 'Courier New', monospace; padding: 15px; box-shadow: 0 0 25px rgba(0,255,0,0.3);">
    <div style="display: flex; justify-content: space-between; border-bottom: 1px solid #222; margin-bottom: 10px; padding-bottom: 5px;">
        <span style="color: #0f0; font-size: 12px; font-weight: bold;">MuradOS v1.0.4</span>
        <span onclick="toggleTerminal()" style="color: #f00; cursor: pointer; font-weight: bold;">X</span>
    </div>
    
    <div id="terminal-output" style="color: #0f0; height: 160px; overflow-y: auto; font-size: 13px; line-height: 1.4;">
        <div>> Sistem aktif... Yardim icin 'help' yazin.</div>
    </div>

    <div style="display: flex; margin-top: 10px; border-top: 1px solid #222; padding-top: 10px;">
        <span style="color: #0f0; margin-right: 8px;">$</span>
        <input type="text" id="terminal-input" style="background: transparent; border: none; color: #0f0; outline: none; width: 100%; font-family: monospace;" autocomplete="off">
    </div>
</div>

<script>
function toggleTerminal() {
    const term = document.getElementById('terminal-window');
    const input = document.getElementById('terminal-input');
    term.style.display = (term.style.display === 'none' || term.style.display === '') ? 'block' : 'none';
    if(term.style.display === 'block') input.focus();
}

document.getElementById('terminal-input').addEventListener('keypress', function (e) {
    if (e.key === 'Enter') {
        const input = this.value.toLowerCase().trim();
        const output = document.getElementById('terminal-output');
        let response = "";

        if(input === 'help') response = "Komutlar: help, about, date, clear, whoami";
        else if(input === 'about') response = "Murad Osmanli. Bilgisayar Muhendisligi Ogrencisi.";
        else if(input === 'date') response = "Saat: " + new Date().toLocaleString();
        else if(input === 'whoami') response = "Murad Osmanli (Admin)";
        else if(input === 'clear') { output.innerHTML = ""; this.value = ""; return; }
        else response = "Hata: '" + input + "' komutu bulunamadi.";

        output.innerHTML += `<div><span style="color: #888;">$ ${this.value}</span><br>${response}</div>`;
        output.scrollTop = output.scrollHeight;
        this.value = "";
    }
});
</script>