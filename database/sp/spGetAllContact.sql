DELIMITER //

CREATE PROCEDURE spGetAllContact(IN productId INT)
BEGIN
    SELECT 
        LEVE.Naam AS LeverancierNaam,
        LEVE.ContactPersoon AS ContactPersoon,
        CONT.Straat AS StraatNaam,
        CONT.Huisnummer AS HuisNummer,
        CONT.Postcode AS Postcode,
        CONT.Stad AS Stad
    FROM 
        product p
    INNER JOIN 
        productperleverancier ppl ON p.Id = ppl.ProductId
    INNER JOIN 
        leverancier LEVE ON ppl.LeverancierId = LEVE.Id
    INNER JOIN 
        contact CONT ON LEVE.Id = CONT.Id
    WHERE 
        p.Id = productId
        AND CONT.Straat IS NOT NULL
    LIMIT 1;
END //

DELIMITER ;