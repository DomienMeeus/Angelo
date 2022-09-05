<template>
  <section>
    <div class="container">
      <h1>{{ mainContent.title[0] }}</h1>
      <div class="contact-text">
        <p>{{ mainContent.paragraph1[0] }}</p>
        <p>{{ mainContent.paragraph2[0] }}</p>
        <p>{{ mainContent.paragraph3[0] }}</p>
        <p>{{ mainContent.paragraph4[0] }}</p>
      </div>

      <div class="contact-card">
        <img
          src="../assets/_images/Logo-Angelo-relief.png"
          alt=""
          class="logo"
        />
        <h1>Angelo Brazilian Hair</h1>
        <p>Plantin en Moretuslei 89 2018 Antwerp</p>
        <p>Phone +32 3 226 19 04</p>
        <p>{{ contactCard.paragraph1[0] }}</p>
        <p>{{ contactCard.paragraph2[0] }}</p>
      </div>
      <img src="../assets/_images/28720(aangepast).png" alt="" />
      <img src="../assets/_images/28668.png" alt="" />
      <img src="../assets/_images/28683.png" alt="" />
      <img src="../assets/_images/28687.png" alt="" />

      <div class="maps-plugin"></div>
      <button>Contact Us</button>

      <div class="bottom-card">
        <div>
          <h1>{{ bottomCard.title[0] }}</h1>
          <p>{{ bottomCard.paragraph1[0] }}</p>
          <p>{{ bottomCard.paragraph2[0] }}</p>
          <p>{{ bottomCard.paragraph3[0] }}</p>
          <p>{{ bottomCard.paragraph4[0] }}</p>
        </div>
        <img src="../assets/_images/28753.png" alt="" />
      </div>
    </div>
  </section>
</template>

<script>
export default {
  data() {
    return {
      mainContent: {
        title: ["VISIT OUR STORE"],
        paragraph1: [
          "Have you made your choice? Do you know what kind of extension, hair structure or colour you want? Then come and visit our store. ",
        ],
        paragraph2: [
          "We can give you extra advice. Or you might change your mind once you are here, as our extensions may just show a tad different in reality",
        ],
        paragraph3: [
          "Want to be sure we have your choice in stock? Just check it out using the Contact button below. We always try to reply the very same day.",
        ],
        paragraph4: [
          "We sure look forward to welcoming you at Angelo Brazilian Hair!",
        ],
      },
      bottomCard: {
        title: ["For our business clients"],
        paragraph1: [
          "Are you a reseller or a fanatic hair collector, then we invite you in our offices for a business chat over a cup of coffee.",
        ],
        paragraph2: [
          "We might even pop open some Bubbles! Chips and peanuts are negociable ;-)",
        ],
        paragraph3: [
          "Want to do business with us? Just let us know and push the above Contact button.",
        ],
        paragraph4: ["We're looking forward to it!"],
      },
      contactCard: {
        paragraph1: ["The shop is open from 12 through 16 hours."],
        paragraph2: [
          "Closed on Wednesdays, Sundays and Belgian public holidays",
        ],
      },
    };
  },
};
</script>
