# Business model of cloud computing

Enterprises usually store data in internal storage and install firewalls to protect against intruders
to access the data. They also standardize data access procedures to prevent insiders to disclose
the information without permission. In cloud computing, the data will be stored in storage
provided by service providers. Service providers must have a viable way to protect their clients’
data, especially to prevent the data from disclosure by unauthorized insiders. Storing the data in
encrypted form is a common method of information privacy protection. If a cloud system is
responsible for both tasks on storage and encryption/decryption of data, the system
administrators may simultaneously obtain encrypted data and decryption keys. This allows them
to access information without authorization and thus poses a risk to information privacy. This
study proposes a business model for cloud computing based on the concept of separating the
encryption and decryption service from the storage service. Furthermore, the party responsible
for the data storage system must not store data in plaintext, and the party responsible for data
encryption and encryption must delete all data upon the computation on encryption or decryption
is complete. A CRM (Customer Relationship Management) service is described in this project as
an example to illustrate the proposed business model.

How to install

1.Install XAMPP S/w with apache and mysql

2.copy the code folder(cloud) to C:\xampp\htdocs

3.copy databasefiles folder(cloud)to C:\xampp\mysql\data

4.Run Xampp control panel from startbutton

5.open browser and type https://localhost/cloud
