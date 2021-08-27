export default {
  data() {
    return {
      maintenance: process.env.MAINTENANCE_SHINODALABS === 1,
    };
  },
};
