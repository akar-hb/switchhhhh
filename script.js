function controlRelay(relay, action) {
    fetch(`control.php?relay=${relay}&action=${action}`)
        .then(response => response.text())
        .then(data => alert(data))
        .catch(error => console.error('Error:', error));
}