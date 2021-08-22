<template>
  <section id="about">
    <div id="about__content">
      <h2>Sobre min</h2>
      <p>
        Lorem Ipsum is simply dummy text of the printing and typesetting
        industry. Lorem Ipsum has been the industry's standard dummy text ever
        since the 1500s, when an unknown printer took a galley of type and
        scrambled it to make a type specimen book. It has survived not only five
        centuries, but also the leap into electronic typesetting, remaining
        essentially unchanged.
        <br /><br />
        It was popularised in the 1960s with the release of Letraset sheets
        containing Lorem Ipsum passages, and more recently with desktop
        publishing software like Aldus PageMaker including versions of Lorem
        Ipsum.
        <br /><br />
        It was popularised in the 1960s with the release of Letraset sheets
        containing Lorem Ipsum passages, and more recently with desktop
        publishing software like Aldus PageMaker including versions of Lorem
        Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting
        industry.
      </p>
    </div>
    <div id="about__img">
      <img src="https://i.imgur.com/7LLsGvi.jpg" alt="Me" />
    </div>
  </section>
</template>

<script>
export default {
  name: "About",
};
</script>

<style lang="scss">
$white: #ffffff;
$black: #000000;
$gray: #808080;
$red: #c82d35;
$montserrat: "Montserrat", sans-serif;

#about {
    width: 80vw;
    margin: 60px auto;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    font-family: $montserrat;
    #about__content {
        flex: 1;
        h2 {
            font-size: 48px;
            font-weight: 700;
            text-transform: uppercase;
        }
        p {
            line-height: 20px;
            margin-top: 30px;
        }
    }
    #about__img {
        flex: 1;
        display: flex;
        align-items: center;
        justify-content: center;
        img {
            box-shadow: 0px 0px 7px 1px rgba(0,0,0,0.40);
        }
    }
}
</style>
