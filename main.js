const faqItems = document.querySelectorAll(".faq-item");

faqItems.forEach((item) => {
  const question = item.querySelector(".faq-question");

  question.addEventListener("click", () => {
    const answer = item.querySelector(".faq-answer");

    // Toggle the active state of the clicked FAQ item
    item.classList.toggle("active");

    // Toggle the answer visibility
    if (item.classList.contains("active")) {
      answer.style.maxHeight = answer.scrollHeight + "px";
    } else {
      answer.style.maxHeight = 0;
    }
  });
});
