import React from "react";
import ReactDOM from "react-dom/client";

export default function Welcome() {
  return (
    <div>Welcome from React</div>
  )
}

let welcome = document.getElementById("welcome")
if (welcome) {
    ReactDOM.createRoot(welcome).render(
        <React.StrictMode>
            <Welcome />
        </React.StrictMode>
    );
} else {
    console.error("Target container is not a DOM element.");
}
