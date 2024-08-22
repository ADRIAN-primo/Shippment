// script.js

const form = document.getElementById('shipment-form');
const submissionList = document.getElementById('submission-list');

form.addEventListener('submit', (e) => {
  e.preventDefault();
  const formData = new FormData(form);
  const submission = {};
  formData.forEach((value, key) => {
    submission[key] = value;
  });
  const listItem = document.createElement('li');
  listItem.textContent = `Order ID: ${submission['order-id']}, Origin: ${submission['origin']}, Destination: ${submission['destination']}, Weight: ${submission['weight']}kg`;
  submissionList.appendChild(listItem);
  form.reset();
});