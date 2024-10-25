import { useContext } from "react";
import { AuthContext } from "./AuthContext";

function LogoutButton() {
    useContext(AuthContext);
}

LogoutButton();