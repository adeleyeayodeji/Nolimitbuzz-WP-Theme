/**
 * Custom JavaScript for No Limit Buzz
 *
 * @package Nolimitbuzz
 */

(function () {
  //get all a .no-limit-buzz--site-main-section-3-pagination
  const paginationLinks = document.querySelectorAll(
    ".no-limit-buzz--site-main-section-3-pagination a"
  );
  //loop through paginationLinks
  paginationLinks.forEach((link) => {
    link.addEventListener("click", function (event) {
      event.preventDefault();
      //show alert
      alert("feature not implemented yet!");
    });
  });
})();
