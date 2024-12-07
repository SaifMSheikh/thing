document.addEventListener("DOMContentLoaded", () => {
    const serviceListDiv = document.querySelector(".service-list");
    const tableDiv = document.getElementById("table");
    const addItemBtn = document.getElementById("addItemBtn");
    const removeItemBtn = document.getElementById("removeItemBtn");
    const popup = document.getElementById("popup");
    const serviceForm = document.getElementById("serviceForm");
    const addServiceBtn = document.getElementById("addServiceBtn");
    const closePopup = document.getElementById("closePopup");
    var services;
    // Fetch services and update UI
    const fetchServices = () => {
        fetch("/services")
            .then((response) => response.json())
            .then((data) => {
                services = data;
                serviceListDiv.innerHTML = "";
                tableDiv.innerHTML = "";
                services.forEach(createServiceItem);
                createServiceTable(services);
            })
            .catch((error) => console.error("Error fetching services:", error));
    };

    // Open popup for adding service
    const openPopup = () => {
        popup.style.display = "flex";
        serviceForm.style.display = "flex";
        serviceForm.style.flexDirection = "column";
        serviceForm.style.justifyContent = "center";
        serviceForm.style.alignItems = "center";
    };

    // Close popup
    closePopup.addEventListener("click", () => {
        popup.style.display = "none";
    });

    // Create and append a service card
    const createServiceItem = (service) => {
        const serviceItem = document.createElement("div");
        serviceItem.classList.add("service-item");

        const subDiv = document.createElement("div");
        subDiv.classList.add("sub");

        const iconImg = document.createElement("img");
        iconImg.src = service.icon || "./Image/leaves.svg";
        iconImg.classList.add("service-img-icon");
        subDiv.appendChild(iconImg);

        const mainImg = document.createElement("img");
        mainImg.src = service.img || "./Image/landscaping.jpeg";
        mainImg.classList.add("service-img");
        subDiv.appendChild(mainImg);

        const captionDiv = document.createElement("div");
        captionDiv.classList.add("service-img-caption");
        captionDiv.innerHTML = `
            <img src="./Image/tick-filled.svg" class="service-img-caption-tick"/>
            250+ Clients<div class='inline-dashed-vertical-line'></div>
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

    // Create the service table
    const createServiceTable = (services) => {
        tableDiv.innerHTML = "";

        const table = document.createElement("table");
        const thead = document.createElement("thead");
        const headerRow = document.createElement("tr");

        const headers = [
            "Service Name",
            "Service Price",
            "Service Description",
        ];
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

    // Add service
    addServiceBtn.addEventListener("click", () => {
        const serviceName = document.getElementById("serviceName").value;
        const servicePrice = document.getElementById("servicePrice").value;
        const serviceDescription =
            document.getElementById("serviceDescription").value;

        if (!serviceName || !servicePrice || !serviceDescription) {
            return alert("All fields are required.");
        }

        const key = prompt("Enter key to add service:");
        if (!key) return alert("Key is required.");

        const newService = {
            key,
            name: serviceName,
            price: servicePrice,
            description: serviceDescription,
        };

        fetch("/add-service", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": document
                    .querySelector('meta[name="csrf-token"]')
                    .getAttribute("content"),
            },
            body: JSON.stringify(newService),
        })
            .then((response) => response.json())
            .then((data) => {
                alert(data.message || "Service added successfully!");
                fetchServices(); // Refresh services
                popup.style.display = "none"; // Close popup
            })
            .catch((error) => console.error("Error adding service:", error));
    });

    // Remove last service
    removeItemBtn.addEventListener("click", () => {
        const key = prompt("Enter key to remove the last item:");
        if (!key) return alert("Key is required.");

        const lastService = services[services.length - 1];

        fetch("/remove-service", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": document
                    .querySelector('meta[name="csrf-token"]')
                    .getAttribute("content"),
            },
            body: JSON.stringify({ key, id: lastService.id }),
        })
            .then((response) => response.json())
            .then((data) => {
                alert(data.message || "Service removed successfully!");
                fetchServices(); // Refresh services
            })
            .catch((error) => console.error("Error removing service:", error));
    });

    // Open popup for adding a service
    addItemBtn.addEventListener("click", openPopup);

    // Fetch services on page load
    fetchServices();
});
