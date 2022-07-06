
            let contacts_data;
            let general_data;

            let contacts_s_form = document.getElementById('contacts_s_form');

            function get_general() {
                let site_title = document.getElementById('site_title');
                let site_about = document.getElementById('site_about');

                let site_title_inp = document.getElementById('site_title_inp');
                let site_about_inp = document.getElementById('site_about_inp');

                let shutdown_toggle = document.getElementById('shutdown-toggle');

                let xhr = new XMLHttpRequest();
                xhr.open("POST", "ajax/settings_crud.php", true);
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

                xhr.onload = function() {
                    general_data = JSON.parse(this.responseText);

                    site_title.innerText = general_data.site_title;
                    site_about.innerText = general_data.site_about;

                    site_title_inp.value = general_data.site_title;
                    site_about_inp.value = general_data.site_about;

                    if (general_data.shutdown == 0) {
                        shutdown_toggle.checked = false;
                        shutdown_toggle.value = 0
                    } else {
                        shutdown_toggle.checked = true;
                        shutdown_toggle.value = 11;
                    }

                }

                xhr.send('get_general');

            }

            function upd_general() {
                let site_title_val = document.getElementById("site_title_inp").value;
                let site_about_val = document.getElementById("site_about_inp").value;
                let xhr = new XMLHttpRequest();
                xhr.open("POST", "ajax/settings_crud.php", true);
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

                xhr.onload = function() {
                    var myModal = document.getElementById('general-s');
                    var modal = bootstrap.Modal.getInstance(myModal);
                    modal.hide();


                    console.log(this.responseText)
                    general_data = JSON.parse(this.responseText);
                    console.log(general_data);

                    if (this.responseText == 1) {
                        alert('success', 'Changes saved!');
                        get_general();
                    } else {
                        alert('error', 'No changes saved!');
                    }

                    //site_title.innerText = general_data.site_title;
                    //site_about.innerText = general_data.site_about;

                    //site_title_inp.value = general_data.site_title;
                    //site_about_inp.value = general_data.site_about;

                }
                xhr.send('site_title=' + site_title_val + '&site_about=' + site_about_val + '&upd_general');
            }

            function upd_shutdown(val) {

                let xhr = new XMLHttpRequest();
                xhr.open("POST", "ajax/settings_crud.php", true);
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

                xhr.onload = function() {
                    if (this.responseText == 1) {
                        alert('success', 'Site has been shutdown!');
                    } else {
                        alert('error', 'Shutdown mode off!');
                    }
                    get_general();


                }
                xhr.send('upd_shutdown=' + val);
            }

            function get_contacts() {

                let contacts_p_id = ['address', 'gmap', 'pn1', 'pn2', 'email', 'fb', 'insta', 'tw'];
                let iframe = document.getElementById('iframe');


                let xhr = new XMLHttpRequest();
                xhr.open("POST", "ajax/settings_crud.php", true);
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

                xhr.onload = function() {
                    contacts_data = JSON.parse(this.responseText);
                    contacts_data = Object.values(contacts_data);

                    for (i = 0; i < contacts_p_id.length; i++) {
                        document.getElementById(contacts_p_id[i]).innerText = contacts_data[i + 1];
                    }
                    iframe.src = contacts_data[9];
                    contacts_inp(contacts_data);
                }

                xhr.send('get_contacts');

            }

            function contacts_inp(data) {
                let contacts_inp_id = ['address_inp', 'gmap_inp', 'pn1_inp', 'pn2_inp', 'email_inp', 'fb_inp', 'insta_inp', 'tw_inp', 'iframe_inp'];
                for (i = 0; i < contacts_inp_id.length; i++) {
                    document.getElementById(contacts_inp_id[i]).value = data[i + 1];
                }
            }

            contacts_s_form.addEventListener('submit', function(e) {
                e.preventDefault();
                upd_contacts();
            })

            function upd_contacts() {
                let index = ['address', 'gmap', 'pn1', 'pn2', 'email', 'fb', 'insta', 'tw', 'iframe'];
                let contacts_inp_id = ['address_inp', 'gmap_inp', 'pn1_inp', 'pn2_inp', 'email_inp', 'fb_inp', 'insta_inp', 'tw_inp', 'iframe_inp'];

                let data_str = "";

                for (i = 0; i < index.length; i++) {
                    data_str += index[i] + "=" + document.getElementById(contacts_inp_id[i]).value + '&';
                }
                data_str += "upd_contacts";

                let xhr = new XMLDocument();
                xhr.open("POST", "ajax/settings_crud.php", true);
                xhr.setRequestHeader('Contact-Type', 'application/x-www-form-urlencoded');

                xhr.onload = function() {
                    var myModal = document.getElementById('contacts-s');
                    var modal = bootstrap.Modal.getInstance(myModal);
                    modal.hide();
                    if (this.responseText == 1) {
                        alert('success', 'Changes saved!');
                        get_contacts();
                    } else {
                        alert('error', 'No changes mode!');
                    }
                }

                xhr.send(data_str);
            }

            window.onload = function() {
                get_general();
                get_contacts();
            }
       