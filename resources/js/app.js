import './bootstrap';

import Alpine from 'alpinejs';
import React from "react";
import { createRoot } from "react-dom/client";
import UniversityPage from "./components/home_page.jsx";

const container = document.getElementById("university-page");
if (container) {
    const root = createRoot(container);
    root.render(<UniversityPage />);
}

window.Alpine = Alpine;

Alpine.start();
