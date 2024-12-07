export const services = [
    {
        name: "Lawn Mowing",
        icon: "./Image/leaves.svg",
        img: "./Image/lawn-mowing.jpeg",
        caption: "250+ Client<div class='inline-dashed-vertical-line'></div>",
        description: "Enjoy our lawn mowing.",
        value: "lawnmowing",
        price: "250 Pkr",
    },
    {
        name: "Landscaping",
        icon: "./Image/leaves.svg",
        img: "./Image/landscaping.jpeg",
        caption: "250+ Client<div class='inline-dashed-vertical-line'></div>",
        description: "Enjoy our landscaping.",
        value: "landscaping",
        price: "250 Pkr",
    },
    {
        name: "BBQ & Sheds",
        icon: "./Image/leaves.svg",
        img: "./Image/bbq-shed.jpeg",
        caption: "250+ Client<div class='inline-dashed-vertical-line'></div>",
        description: "Enjoy our BBQ sheds.",
        value: "bbq-sheds",
        price: "250 Pkr",
    },
    {
        name: "Spa & Pools",
        icon: "./Image/leaves.svg",
        img: "./Image/pool-spa.jpeg",
        caption: "250+ Client<div class='inline-dashed-vertical-line'></div>",
        description: "Relax in our pools.",
        value: "spa-pools",
        price: "250 Pkr",
    },
    {
        name: "Planting",
        icon: "./Image/leaves.svg",
        img: "./Image/planting.jpeg",
        caption: "250+ Client<div class='inline-dashed-vertical-line'></div>",
        description: "Enjoy our planting.",
        value: "planting",
        price: "250 Pkr",
    },
];

document.addEventListener("DOMContentLoaded", () => {
    const serviceListDiv = document.querySelector(".service-list");
    const tableDiv = document.getElementById("table");
    const addItemBtn = document.getElementById("addItemBtn");
    const removeItemBtn = document.getElementById("removeItemBtn");
    const popup = document.getElementById("popup");
    const serviceForm = document.getElementById("serviceForm");
    const addServiceBtn = document.getElementById("addServiceBtn");
    const closePopup = document.getElementById("closePopup");

    // Function to display the popup
    function openPopup() {
        popup.style.display = "flex";
        serviceForm.style.display = "flex";
        serviceForm.style.flexDirection = "column";
        serviceForm.style.justifyContent = "center";
        serviceForm.style.alignItems = "center";
    }

    // Function to close the popup
    closePopup.addEventListener("click", () => {
        popup.style.display = "none";
    });

    // Function to create and append a service item
    const createServiceItem = (service) => {
        const serviceItem = document.createElement("div");
        serviceItem.classList.add("service-item");

        const subDiv = document.createElement("div");
        subDiv.classList.add("sub");

        const iconImg = document.createElement("img");
        iconImg.src = service.icon;
        iconImg.classList.add("service-img-icon");
        subDiv.appendChild(iconImg);

        const mainImg = document.createElement("img");
        mainImg.src = service.img;
        mainImg.classList.add("service-img");
        subDiv.appendChild(mainImg);

        const captionDiv = document.createElement("div");
        captionDiv.classList.add("service-img-caption");
        captionDiv.innerHTML = `
            <img src="./Image/tick-filled.svg" class="service-img-caption-tick"/>
            ${service.caption}
            <img src="./Image/tick.svg" class="service-img-caption-tick"/>
           ${service.price}
        `;
        subDiv.appendChild(captionDiv);

        serviceItem.appendChild(subDiv);

        const descriptionDiv = document.createElement("div");
        descriptionDiv.style.marginBottom = "40px";
        serviceItem.appendChild(descriptionDiv);

        const title = document.createElement("h2");
        title.textContent = service.name;
        descriptionDiv.appendChild(title);

        const description = document.createElement("p");
        description.innerHTML = service.description;
        descriptionDiv.appendChild(description);

        serviceListDiv.appendChild(serviceItem);
    };

    // Function to create the service table
    const createServiceTable = (services) => {
        tableDiv.innerHTML = ""; // Clear existing content

        const table = document.createElement("table");
        const thead = document.createElement("thead");
        const headerRow = document.createElement("tr");

        const headers = ["Service Name", "Service Price", "Service Description"];
        headers.forEach((header) => {
            const th = document.createElement("th");
            th.textContent = header;
            headerRow.appendChild(th);
        });

        thead.appendChild(headerRow);
        table.appendChild(thead);

        const tbody = document.createElement("tbody");
        services.forEach((service) => {
            const row = document.createElement("tr");

            const nameCell = document.createElement("td");
            nameCell.textContent = service.name;
            row.appendChild(nameCell);

            const priceCell = document.createElement("td");
            priceCell.textContent = service.price;
            row.appendChild(priceCell);

            const descriptionCell = document.createElement("td");
            descriptionCell.textContent = service.description;
            row.appendChild(descriptionCell);

            tbody.appendChild(row);
        });

        table.appendChild(tbody);
        tableDiv.appendChild(table);
    };

    addServiceBtn.addEventListener('click', () => {
        const serviceName = document.getElementById('serviceName').value;
        const servicePrice = document.getElementById('servicePrice').value;
        const serviceDescription = document.getElementById('serviceDescription').value;
        const key = prompt('Enter your key to add an item:');
    
        if (!key) return alert('Key is required.');
    
        const newService = {
            key: key,
            name: serviceName,
            price: servicePrice,
            description: serviceDescription,
        };
    
        fetch('/add-service', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            },
            body: JSON.stringify(newService),
        })
            .then((response) => {
                if (response.ok) {
                    return response.json(); // Parse the JSON response
                } else {
                    return response.json().then((data) => {
                        throw new Error(data.error || 'Failed to add service.');
                    });
                }
            })
            .then((data) => {
                // Update the table with the new service
                services.push(newService); // Add the new service to the array
                createServiceTable(services); // Re-render the table with all services
                alert(data.message || 'Service added successfully!');
            })
            .catch((error) => {
                console.error('Error:', error.message);
                alert(error.message);
            });
    });
        // Remove last service
    removeItemBtn.addEventListener("click", () => {
        const key = prompt("Enter key to remove the last item:");

        fetch('/remove-service', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            },
            body: JSON.stringify({ key }),
        })
            .then((response) => {
                if (response.ok) {
                    services.pop();
                    serviceListDiv.lastChild.remove();
                    createServiceTable(services);
                } else {
                    alert("Invalid key. Cannot remove item.");
                }
            })
            .catch((error) => console.error("Error:", error));
    });

    // Open popup to add a service
    addItemBtn.addEventListener("click", () => {
        const key = prompt("Enter key to add a service:");

        fetch('/validate-key', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            },
            body: JSON.stringify({ key }),
        })
            .then((response) => {
                if (response.ok) {
                    openPopup();
                } else {
                    alert("Invalid key.");
                }
            })
            .catch((error) => console.error("Error:", error));
    });

    // Initialize services
    services.forEach(createServiceItem);
    createServiceTable(services);
});
