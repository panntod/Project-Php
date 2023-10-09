<!DOCTYPE html>
<html>

<head>
    <title>Tambah Saldo</title>
    <?php include 'navbar.php' ?>

    <style>
        .main-content {
            width: 50%;
            border-radius: 20px;
            box-shadow: 0 5px 5px rgba(0, 0, 0, .4);
            margin: 5em auto;
            display: flex;
        }

        .company__info {
            background-color: var(--color-primary);
            border-top-left-radius: 20px;
            border-bottom-left-radius: 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            color: #fff;
        }

        .fa-android {
            font-size: 3em;
        }

        @media screen and (max-width: 640px) {
            .main-content {
                width: 90%;
            }

            .company__info {
                display: none;
            }

            .login_form {
                border-top-left-radius: 20px;
                border-bottom-left-radius: 20px;
            }
        }

        @media screen and (min-width: 642px) and (max-width:800px) {
            .main-content {
                width: 70%;
            }
        }

        .row>h2 {
            color: var(--color-primary);
        }

        .login_form {
            background-color: #fff;
            border-top-right-radius: 20px;
            border-bottom-right-radius: 20px;
            border-top: 1px solid #ccc;
            border-right: 1px solid #ccc;
        }

        form {
            padding: 0 2em;
        }

        .form__input {
            width: 100%;
            border: 0px solid transparent;
            border-radius: 0;
            border-bottom: 1px solid #aaa;
            padding: 1em .5em .5em;
            padding-left: 2em;
            outline: none;
            margin: 1.5em auto;
            transition: all .5s ease;
        }

        .form__input:focus {
            border-bottom-color: var(--color-primary);
            box-shadow: 0 0 5px rgba(0, 80, 80, .4);
            border-radius: 4px;
        }

        .btn {
            transition: all .5s ease;
            width: 70%;
            border-radius: 30px;
            color: #var(--color-primary);
            font-weight: 600;
            background-color: #fff;
            border: 1px solid var(--color-primary);
            margin-top: 1.5em;
            margin-bottom: 1em;
        }

        .btn:hover,
        .btn:focus {
            background-color: var(--color-primary);
            color: #fff;
        }
    </style>

    <!-- Main Content -->
    <section>
        <div class="container-fluid" data-aos="fade-up">
            <div class="row main-content bg-success text-center">
                <div class="col-md-4 text-center company__info">
                    <span class="company__logo">
                        <h2><span class="fa fa-android"></span></h2>
                    </span>
                    <img src="assets/img/hero-img.svg" class="img-fluid company_title" alt="" data-aos="zoom-out"
                        data-aos-delay="100">
                </div>
                <div class="col-md-8 col-xs-12 col-sm-12 login_form ">
                    <div class="container-fluid">
                        <div class="row" style="padding: 18px">
                            <h2>Tambah Saldo</h2>
                        </div>
                        <div class="row">
                            <form action="proses_tambah_saldo.php" method="post" class="form-group">
                                <div class="row">
                                    <h5 style="text-align: left"> Saldo
                                        <?= $_SESSION['nama'] ?>
                                    </h5>
                                </div>
                                <div class="row">
                                    <input type="number" name="saldo" id="saldo" class="form__input"
                                        placeholder="Masukan Saldo" min="500" required>
                                </div>

                                <div class="row text-center d-flex align-items-center">
                                    <div class="col">
                                        <button type="submit" class="btn">Tambahkan</button>
                                    </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include 'scripts.php' ?>
</body>
</html>