document.getElementById("download-button").addEventListener("click", startLoading);

function startLoading() {
  document.getElementById("check-area").classList.remove("is-hidden");

  var percentageElement = document.getElementById('percentage');
  var loadingBarElement = document.getElementById('loading-bar');
  var loadingStatus = document.querySelector('.loading-status');
  var percentage = 0;
  var totalBars = 25; // Total number of # characters in the bar

  var interval = setInterval(function() {
    percentage += 1;
    var numBars = Math.floor((percentage / 100) * totalBars);
    var loadingBar = '#'.repeat(numBars) + ' '.repeat(totalBars - numBars);

    percentageElement.textContent = ' ' + percentage + '%';
    loadingBarElement.textContent = loadingBar;

    if (percentage >= 100) {
      clearInterval(interval);
      loadingStatus.classList.add('finish');
      document.getElementById("check-area").classList.add("is-hidden");
      document.getElementById("checked-area").classList.remove("is-hidden");
    }
  }, 100); // Update every 100 milliseconds
}
