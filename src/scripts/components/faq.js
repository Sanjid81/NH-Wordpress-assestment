// Web Accordion 
const webAccordionItems = document.querySelectorAll('.web-accordion-item');

webAccordionItems.forEach((webAccordionItem) => {
    webAccordionItem.addEventListener("click", () => {
        // Close all other accordion items
        webAccordionItems.forEach(item => {
            if (item !== webAccordionItem) {
                item.classList.remove('show');
            }
        });

        // Toggle the clicked one
        webAccordionItem.classList.toggle('show');
    });
});
