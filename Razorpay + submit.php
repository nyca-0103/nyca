"handler": function (response){
  // AJAX call to save data
  const formData = new FormData(document.getElementById('registrationForm'));
  formData.append("payment_id", response.razorpay_payment_id);

  fetch("submit.php", {
    method: "POST",
    body: formData
  })
  .then(res => res.text())
  .then(data => {
    if(data === "success") {
      alert("🎉 Registration successful and payment recorded!");
    } else {
      alert("⚠️ Error saving registration. Please contact admin.");
    }
  });
}
