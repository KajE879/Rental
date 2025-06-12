const literRange = document.getElementById('literRange');
const literValue = document.getElementById('literValue');

literRange.addEventListener('input', () => {
  literValue.textContent = `${literRange.value} L`;
});

const capacityRange = document.getElementById('capacityRange');
const capacityValue = document.getElementById('capacityValue');

capacityRange.addEventListener('input', () => {
  const val = capacityRange.value;
  capacityValue.textContent = `${val} ${val == 1 ? 'Person' : 'Personen'}`;
});





