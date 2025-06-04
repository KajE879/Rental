const range = document.getElementById('capacityRange');
const output = document.getElementById('capacityValue');

  capacityRange.addEventListener('input', () => {
    const count = capacityRange.value;
    capacityValue.textContent = `${count} ${count == 1 ? 'Person' : 'Personen'}`;
});


