<template>
  <div id="background">
    <section id="about">
      <div id="about__content">
        <h2>Sobre mim</h2>
        <p>
          Lorem Ipsum is simply dummy text of the printing and typesetting
          industry. Lorem Ipsum has been the industry's standard dummy text ever
          since the 1500s, when an unknown printer took a galley of type and
          scrambled it to make a type specimen book. It has survived not only
          five centuries, but also the leap into electronic typesetting,
          remaining essentially unchanged.
          <br /><br />
          It was popularised in the 1960s with the release of Letraset sheets
          containing Lorem Ipsum passages, and more recently with desktop
          publishing software like Aldus PageMaker including versions of Lorem
          Ipsum.
          <br /><br />
          It was popularised in the 1960s with the release of Letraset sheets
          containing Lorem Ipsum passages, and more recently with desktop
          publishing software like Aldus PageMaker including versions of Lorem
          Ipsum. Lorem Ipsum is simply dummy text of the printing and
          typesetting industry.
        </p>
      </div>
      <div id="about__img">
        <img src="https://via.placeholder.com/334x501" alt="Me" />
      </div>
    </section>
  </div>
</template>

<script>
export default {
  name: "About",
};
</script>

<style lang="scss">
$white: #ffffff;
$black: #111111;
$gray: #cccccc;
$red: #c82d35;
$montserrat: "Montserrat", sans-serif;

#background {
  background-color: $black;
  #about {
    width: 80vw;
    margin: 0px auto;
    padding: 110px 0;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    gap: 10px;
    font-family: $montserrat;
    #about__content {
      flex: 1;
      h2 {
        font-size: 48px;
        font-weight: 700;
        text-transform: uppercase;
        color: $gray;
      }
      p {
        line-height: 20px;
        margin-top: 30px;
        color: $white;
      }
    }
    #about__img {
      flex: 1;
      display: flex;
      align-items: center;
      justify-content: center;
      img {
        box-shadow: 0px 0px 7px 1px rgba(0, 0, 0, 0.4);
      }
    }
  }
}

/* Tablets */
@media only screen and (min-width: 788px) and (max-width: 979px) {
}

/* Smartphone */
@media only screen and (max-width: 787px) {
  #background {
    #about {
      flex-direction: column;
      gap: 30px;
    }
  }
}
</style>
