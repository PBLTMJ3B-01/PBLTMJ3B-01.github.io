document.addEventListener('DOMContentLoaded', function () {
    const statusElement = document.getElementById('status');
    const toggleButton = document.getElementById('toggleButton');

    toggleButton.addEventListener('click', function () {
        toggleButton.disabled = true;

        // Send a request to the ESP32 to toggle the LED
        fetch('/toggle', { method: 'POST' })
            .then(response => response.text())
            .then(responseText => {
                if (responseText === 'success') {
                    statusElement.textContent = 'LED Status: On';
                } else {
                    statusElement.textContent = 'LED Status: Off';
                }
            })
            .catch(error => {
                console.error('An error occurred:', error);
                statusElement.textContent = 'Error: Unable to toggle LED';
            })
            .finally(() => {
                toggleButton.disabled = false;
            });
    });
});
