# HTTP and HTTPS Password Capture and Transmission Analysis Using Wireshark

## 📌 Project Overview
This project demonstrates the security differences between HTTP and HTTPS protocols during credential transmission. It uses a controlled laboratory environment to show how plain HTTP exposes login data and how HTTPS protects it using Transport Layer Security (TLS) encryption. It also includes an authorized TLS decryption demonstration using browser-generated session secrets.

## 🎯 Objectives
* Capture an HTTP POST request and identify readable form parameters in Wireshark.
* Enable and verify HTTPS on a local Apache server.
* Capture TLS 1.3 traffic to observe encrypted application data.
* Use a browser-generated TLS key log (`SSLKEYLOGFILE`) to decrypt only the authorized local session.

## 🛠️ Technologies Used
* **Operating System:** Kali Linux
* **Web Server:** XAMPP (Apache HTTP Server, PHP 8.2)
* **Web Browser:** Chromium
* **Packet Analyzer:** Wireshark 4.6.4
* **Languages:** HTML, PHP

## 🚀 Experimental Workflow
1. **HTTP Capture:** Hosted a dummy banking login page on localhost. Captured the traffic on the loopback interface (`lo`) using Wireshark to observe readable URL-encoded POST fields.
2. **HTTPS Configuration:** Enabled the `mod_ssl` module in Apache and verified the server on TCP port 443.
3. **Encrypted TLS Capture:** Captured standard HTTPS traffic, verifying that the application data is encrypted via TLS 1.3.
4. **Authorized Decryption:** Launched Chromium with a session key log and configured Wireshark to read `/tmp/sslkeys.log`. This allowed Wireshark to dissect the protected session and reconstruct the original HTTP form fields for diagnostic purposes.

## ⚠️ Ethical & Safety Disclaimer
**AUTHORIZED LABORATORY USE ONLY:** This experimental work was performed entirely on a local XAMPP server and the loopback interface of a virtual machine. 
* Only dummy login credentials were used for testing. 
* No third-party websites, production servers, public networks, or unauthorized user traffic were intercepted. 
* The decryption method used is a diagnostic technique requiring endpoint session keys and does not represent a passive break of TLS encryption.

## 👨‍💻 Author
**ELAVARASAN. S**
```[span_2](start_span)[span_2](end_span)[span_3](start_span)[span_3](end_span)[span_4](start_span)[span_4](end_span)[span_5](start_span)[span_5](end_span)[span_6](start_span)[span_6](end_span)[span_7](start_span)[span_7](end_span)[span_8](start_span)[span_8](end_span)[span_9](start_span)[span_9](end_span)

