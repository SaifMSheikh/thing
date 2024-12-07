let details_flag = 0;
const show_btn_values = ["Show More", "Show Less"];
const toggle_details = function () {
    /*Update Values & Fetch Elements*/
    details_flag = ++details_flag % 2;
    const icon_boxes = document.getElementsByClassName("icon-box");
    const show_btn = document.querySelector(".show-btn");
    const callback = details_flag ? _util_show_details : _util_hide_details;
    /*Update Details*/
    show_btn.innerHTML = show_btn_values[details_flag];
    for (let i = 0; i < 3; ++i) setTimeout(callback, i * 100, icon_boxes[i]);
};
/*Callbacks & Utility Functions*/
const _util_show_details = function (elem) {
    elem.classList.add("show");
    elem.classList.remove("hide");
};
const _util_hide_details = function (elem) {
    elem.classList.add("hide");
    elem.classList.remove("show");
};

const fetchServices = () => {
    fetch("/services")
        .then((response) => response.json())
        .then((data) => {
            createServiceCards(data); // Create cards once services are fetched
        })
        .catch((error) => console.error("Error fetching services:", error));
};

var imagelinks = [
    "./Image/mowing.jpg",
    "./Image/planting.jpeg",
    "./Image/bbq.avif",
    "./Image/pool.jpg",
];
// Create service cards dynamically
const createServiceCards = (services) => {
    const cardsWrapper = document.getElementById("cards-wrapper");

    // Loop through the first four services (or all if there are fewer than 4)
    services.slice(0, 4).forEach((service, index) => {
        const card = document.createElement("div");
        card.classList.add("card");

        // Image for the card
        const cardImage = document.createElement("img");
        cardImage.src = imagelinks[index] || "./Image/default.jpg"; // Use a default image if not available
        cardImage.alt = service.name;
        cardImage.classList.add("card-image");
        card.appendChild(cardImage);

        // Card content
        const cardContent = document.createElement("div");
        cardContent.classList.add("card-content");

        // Card info (Clients and Price)
        const cardInfo = document.createElement("div");
        cardInfo.classList.add("card-info");
        cardInfo.innerHTML = `
            <span><i class="fas fa-check-circle"></i> 250+ Clients</span>
            <span class="dashed-divider"></span>
            <span>${service.price}</span>
        `;
        cardContent.appendChild(cardInfo);

        // Card title
        const cardTitle = document.createElement("div");
        cardTitle.classList.add("card-title");
        const title = document.createElement("h2");
        title.textContent = service.name;
        cardTitle.appendChild(title);
        cardContent.appendChild(cardTitle);

        // Card description
        const cardDescription = document.createElement("p");
        cardDescription.classList.add("card-description");
        cardDescription.textContent = service.description;
        cardContent.appendChild(cardDescription);

        // Learn more link
        const learnMoreLink = document.createElement("a");
        learnMoreLink.classList.add("cta-btn");
        learnMoreLink.href = "/service"; // Use the service-specific link
        learnMoreLink.innerHTML = `<span class="arrow-circle">&#10132;</span> Learn More`;

        cardContent.appendChild(learnMoreLink);

        // Append the card to the wrapper
        card.appendChild(cardContent);
        cardsWrapper.appendChild(card);
    });
};

// Call fetchServices on page load to populate the cards
document.addEventListener("DOMContentLoaded", fetchServices);
